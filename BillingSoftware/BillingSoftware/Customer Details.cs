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
    public partial class Customer_Details : Form
    {
        MySqlConnection con = new MySqlConnection(@"Data Source=localhost; Database=billing; User id=root; Password=''");
        MySqlCommand cmd;
        MySqlDataReader mdr;
        public Customer_Details()
        {
            InitializeComponent();
        }
       

        private void txtSearch_Click(object sender, EventArgs e)
        {
            con.Open();
            string select = "SELECT * FROM customer_details WHERE customer_mobile =" + decimal.Parse(txtCustomerMobile.Text);
            cmd = new MySqlCommand(select, con);
            mdr = cmd.ExecuteReader();
            if (mdr.Read())
            {
                txtCustomerName.Text = mdr.GetString("customer_name");
                txtCustomerAddress.Text = mdr.GetString("customer_address");
                txtPoints.Text = mdr.GetInt32("customer_points").ToString();
            }
            else
            {
                MessageBox.Show("No Data For this Mobile Number");
            }
            con.Close();
        }

        private void txtclose_Click(object sender, EventArgs e)
        {
            this.Close();

        }
















        private void txtUpdate_Click(object sender, EventArgs e)
        {
            try
            {
                con.Open();

                MySqlCommand cmd = new MySqlCommand("UPDATE customer_Details SET customer_name = '" + txtCustomerName.Text + "', customer_address ='" + txtCustomerAddress.Text + "' WHERE customer_mobile='" + this.txtCustomerMobile.Text + "'");
                cmd.Connection = con;
                cmd.ExecuteNonQuery();
                con.Close();
                MessageBox.Show("Successfully Updated");
            }
            catch(Exception ex)
            {
                MessageBox.Show(ex.Message);

            }
        }
        


        private void txtCreateNew_Click(object sender, EventArgs e)
        {
            this.Hide();
            New_Customer_Details cust = new New_Customer_Details();
            cust.Show();
        }

        private void txtContinue_Click(object sender, EventArgs e)
        {
            this.Hide();
            Payment pay = new Payment();
            pay.Show();
        }

       
       


        
    }
}
