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
    public partial class Update_list : Form
    {
        public Update_list()
        {
            InitializeComponent();
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void btnUpdate_Click(object sender, EventArgs e)
        {
            MySqlConnection con = new MySqlConnection(@"Data Source=localhost; Database=billing; User id=root; Password=''");
            MySqlCommand cmdDataBase = new MySqlCommand("update company_list set (company_name) values('" + txtUpdate.Text + "');", con);
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
