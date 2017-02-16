using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace BillingSoftware
{
    public partial class New_Comapny : Form
    {
        public New_Comapny()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void btnOk_Click(object sender, EventArgs e)
        {
            MySqlConnection con = new MySqlConnection(@"Data Source=localhost; Database=billing; User id=root; Password=''");
            MySqlCommand cmdDataBase = new MySqlCommand("insert into company_list (company_name) values('"+ txtCname.Text +"');", con);
            MySqlDataReader myReader;
            try
            {
                con.Open();
                myReader = cmdDataBase.ExecuteReader();
                MessageBox.Show("Saved Successfully");
                while (myReader.Read())
                {
                }
               
               
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
           
        }
    }
}
