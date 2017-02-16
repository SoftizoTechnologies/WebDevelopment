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
    public partial class New_Customer_Details : Form
    {
        MySqlConnection con = new MySqlConnection(@"Data Source=localhost; Database=billing; User id=root; Password=''");
        MySqlCommand cmd;
        public New_Customer_Details()
        {
            InitializeComponent();
        }

        private void txtclose_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void New_Customer_Details_Load(object sender, EventArgs e)
        {

        }
        void clear()
        {
            txtCustomerMobile.Text = "";
            txtCustomerName.Text= "";
            txtCustomerAddress.Text = "";
            txtPoints.Text = "";
        }


        private void txtOk_Click(object sender, EventArgs e)
        {
            try
            {
                

                MySqlCommand cmd = new MySqlCommand("INSERT into  customer_Details(customer_mobile,customer_name,customer_address,customer_points) values('" + this.txtCustomerMobile.Text + "', '" + this.txtCustomerName.Text + "', '" + txtCustomerAddress.Text + "', '" + this.txtPoints.Text + "');",con);
                con.Open();
                cmd.ExecuteNonQuery();
                
                MessageBox.Show("Successfully saved");
                con.Close();
                clear();
                
            }
            catch (Exception)
            {
                MessageBox.Show("User with same mobile number  already exists.");
                clear();

            }
        }

        private void txtContinue_Click(object sender, EventArgs e)
        {
            this.Hide();
            Payment pay = new Payment();
            pay.Show();
        }

        
    }
}
