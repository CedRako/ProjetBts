/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Tools;


import Controlers.CtrlEleve;
import Controlers.CtrlMoniteur;
import Entities.Lecon;
import java.util.ArrayList;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author Rakotomalala Cédric
 */
public class ModelJTable extends AbstractTableModel
{
    String[] colonnes;
    Object[][] lignes; 
    CtrlMoniteur CtrlMoniteur;
    CtrlEleve CtrlEleve;
    
    @Override
    public int getRowCount() {
       return lignes.length;
    }

    @Override
    public int getColumnCount() {
       return colonnes.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) 
    {
        return lignes[rowIndex][columnIndex];
        
    }
    @Override
    public String getColumnName(int column){
        return colonnes[column];
    }
    
    public void LoadDatasLecon(ArrayList<Lecon> mesLecons)
    {
        // Remplir tableaux colonnes
        CtrlMoniteur= new CtrlMoniteur();
        colonnes = new String []{" Moniteur" , "Date","Heure","Véhicule"};
        lignes = new  Object[mesLecons.size()][4];
        // Remplir le tableau lignes
        int i =0;
        for (Lecon uneLecon : mesLecons)
        {
            lignes[i][0]= CtrlMoniteur.getNomMoniteurById(uneLecon.getCodeMoniteur());
            lignes[i][1]= uneLecon.getDate();
            lignes[i][2]= uneLecon.getHeure();
            lignes[i][3]= uneLecon.getImmatriculation();
            i++;
        }
        //Mettre à jour le JTABLE dans l'interface graphique
        fireTableChanged(null);
    }
    
     public void loadDatasPlanningMoniteur(ArrayList<Lecon> mesLecons)
    {
        CtrlEleve = new CtrlEleve();
        colonnes = new String[]{"Eleve", "Date" , "Heure", "Véhicule"};
        lignes = new Object [mesLecons.size()][4];
        int i =0;
        for (Lecon uneLeconEleve : mesLecons)
        {
            lignes[i][0]= CtrlEleve.getNomEleveById(uneLeconEleve.getCodeEleve());
            lignes[i][1]= uneLeconEleve.getDate();
            lignes[i][2]= uneLeconEleve.getHeure();
            lignes[i][3]= uneLeconEleve.getImmatriculation();
            i++;
        }
        fireTableDataChanged();
    }

}