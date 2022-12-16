/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Controlers;

import Entities.Categorie;
import Tools.ConnexionBDD;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Rakotomalala Cédric
 */
public class CtrlCategorie {
    private Connection maCnx;
    private PreparedStatement ps ;
    private ResultSet rs;
    
    public CtrlCategorie(){
        maCnx=ConnexionBDD.getCnx();
    }
    public ArrayList<Categorie> getAllCategorie(){
        ArrayList<Categorie>lesCategories = new ArrayList<>();
        try {
            ps=maCnx.prepareStatement("Select CodeCategorie,libelle,prix from Categorie");
            rs=ps.executeQuery();
            while(rs.next()){
                Categorie uneCategorie= new Categorie(rs.getInt(1), rs.getString(2), rs.getDouble(3));
                lesCategories.add(uneCategorie);
            }
        } catch (SQLException ex) {
            Logger.getLogger(CtrlCategorie.class.getName()).log(Level.SEVERE, null, ex);
        }
         return lesCategories;
    }
    public int getIdCategorie(String libelle){
        int idCat=0;
        try{
            ps=maCnx.prepareStatement("Select CodeCategorie from categorie where libelle= ?");
            ps.setString(1, libelle);
            rs=ps.executeQuery();
            rs.next();
            idCat=rs.getInt(1);
            ps.close();
            rs.close();
        }catch (SQLException ex) {
            Logger.getLogger(CtrlCategorie.class.getName()).log(Level.SEVERE, null, ex);
        }
        return idCat;
    }
}
