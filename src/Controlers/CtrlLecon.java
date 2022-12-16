/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Controlers;

import Entities.Lecon;
import Tools.ConnexionBDD;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.sql.Date;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Rakotomalala Cédric
 */
public class CtrlLecon {
    private Connection maCnx;
    private PreparedStatement ps ;
    private ResultSet rs;
    
    public CtrlLecon()
    {
        maCnx = ConnexionBDD.getCnx();
    }
    public ArrayList<Lecon> GetLeconByIdEleve(int numEleve){
         ArrayList<Lecon> mesLecons =  new ArrayList<>();
        try {
            ps= maCnx.prepareStatement("SELECT codeLecon,Date,heure,CodeMoniteur,CodeEleve,Immatriculation,reglee\n" +
                    "FROM lecon\n" +
                    "Where CodeEleve=? AND Date > CURDATE()\n"+
                     "Order by DATE asc");
            ps.setInt(1, numEleve);
            rs= ps.executeQuery();
            while(rs.next()){
                Lecon uneLecon= new Lecon(rs.getInt(1),rs.getDate(2),rs.getString(3),rs.getInt(4),rs.getInt (5),rs.getString(6),rs.getInt(7));
                mesLecons.add(uneLecon);
            }
            ps.close();
            rs.close();
        } catch (SQLException ex) {
            Logger.getLogger(CtrlLecon.class.getName()).log(Level.SEVERE, null, ex);
        }
        return mesLecons;
    }
    public void AjouterLecon(String date, String heure,int codeMoniteur,int codeEleve,String imma, int regl){
        try {
            ps = maCnx.prepareStatement("insert into lecon values(?,?,?,?,?,?,?)");
            ps.setObject(1, null);
            ps.setString(2, date);
            ps.setString(3, heure);
            ps.setInt(4, codeMoniteur);
            ps.setInt(5, codeEleve);
            ps.setString(6, imma);
            ps.setInt(7, regl);
            ps.executeUpdate();
            ps.close();
        } catch (SQLException ex) {
            Logger.getLogger(CtrlLecon.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    public float MontantTotalPermis(int numEleve, int codeCate){
        float montantT=0;
        try {
            ps=maCnx.prepareStatement("SELECT  (SELECT Count(CodeLecon) FROM lecon join vehicule on lecon.Immatriculation= vehicule.Immatriculation where codeEleve = ? and vehicule.codeCategorie= ?) * prix as MontantTotal\n" +
                    "from categorie\n" +
                    "where CodeCategorie = ?;");
            ps.setInt(1, numEleve);
            ps.setInt(2, codeCate);
            ps.setInt(3,codeCate);
//            ps.setInt(4,numEleve);
            rs = ps.executeQuery();
            rs.next();
            montantT = rs.getFloat(1);
            ps.close();
            rs.close();
        } catch (SQLException ex) {
            Logger.getLogger(CtrlLecon.class.getName()).log(Level.SEVERE, null, ex);
        }
        return montantT;
        
    }
    public float MontantTotalPermisARegler(int numEleve, int codeCate){
        float montantT=0;
        try {
            ps=maCnx.prepareStatement("SELECT  (SELECT Count(CodeLecon) FROM lecon join vehicule on lecon.Immatriculation= vehicule.Immatriculation where codeEleve = ? and vehicule.codeCategorie= ? and reglee=0) * prix as MontantTotal\n" +
                    "from categorie\n" +
                    "where CodeCategorie = ?;");
            ps.setInt(1, numEleve);
            ps.setInt(2, codeCate);
            ps.setInt(3,codeCate);
//            ps.setInt(4,numEleve);
            rs = ps.executeQuery();
            rs.next();
            montantT = rs.getFloat(1);
            ps.close();
            rs.close();
        } catch (SQLException ex) {
            Logger.getLogger(CtrlLecon.class.getName()).log(Level.SEVERE, null, ex);
        }
        return montantT;
        
    }
    public int nombreDeLeconParEleveEtPermisFini(int numEleve,int codeCate){
        int nbrLecon=0;
        try {
            ps=maCnx.prepareCall("SELECT COUNT(CodeLecon)\n" +
                    "FROM lecon\n" +
                    "join vehicule on lecon.Immatriculation=vehicule.Immatriculation\n" +
                    "WHERE vehicule.codeCategorie=? and CodeEleve=? and Date <CURDATE();");
            ps.setInt(1, codeCate);
            ps.setInt(2,numEleve);
            rs=ps.executeQuery();
            rs.next();
            nbrLecon=rs.getInt(1);
            ps.close();
            rs.close();
        } catch (SQLException ex) {
            Logger.getLogger(CtrlLecon.class.getName()).log(Level.SEVERE, null, ex);
        }
         return nbrLecon;      
    }
    public int nombreDeLeconParEleveEtPermisAfaire(int numEleve,int codeCate){
        int nbrLecon=0;
        try {
            ps=maCnx.prepareCall("SELECT COUNT(CodeLecon)\n" +
                    "FROM lecon\n" +
                    "join vehicule on lecon.Immatriculation=vehicule.Immatriculation\n" +
                    "WHERE vehicule.codeCategorie=? and CodeEleve=? and Date > CURDATE();");
            ps.setInt(1, codeCate);
            ps.setInt(2,numEleve);
            rs=ps.executeQuery();
            rs.next();
            nbrLecon=rs.getInt(1);
            ps.close();
            rs.close();
        } catch (SQLException ex) {
            Logger.getLogger(CtrlLecon.class.getName()).log(Level.SEVERE, null, ex);
        }
         return nbrLecon;      
    }
        public ArrayList<Lecon> GetLeconByIdMoniteur(int numMoniteur){
         ArrayList<Lecon> mesLecons =  new ArrayList<>();
        try {
            ps= maCnx.prepareStatement("SELECT codeLecon,Date,heure,CodeMoniteur,CodeEleve,Immatriculation,reglee\n" +
                    "FROM lecon\n" +
                    "Where CodeMoniteur=? AND Date > CURDATE()\n"+
                     "Order by DATE asc");
            ps.setInt(1, numMoniteur);
            rs= ps.executeQuery();
            while(rs.next()){
                Lecon uneLecon= new Lecon(rs.getInt(1),rs.getDate(2),rs.getString(3),rs.getInt(4),rs.getInt (5),rs.getString(6),rs.getInt(7));
                mesLecons.add(uneLecon);
            }
            ps.close();
            rs.close();
        } catch (SQLException ex) {
            Logger.getLogger(CtrlLecon.class.getName()).log(Level.SEVERE, null, ex);
        }
        return mesLecons;
    }
}
