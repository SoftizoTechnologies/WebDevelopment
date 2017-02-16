namespace BillingSoftware
{
    partial class Company_List
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.txtLoadCy = new System.Windows.Forms.Button();
            this.txtCreateCy = new System.Windows.Forms.Button();
            this.txtEditCy = new System.Windows.Forms.Button();
            this.txtRemoveCy = new System.Windows.Forms.Button();
            this.txtcloseCy = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.txtName = new System.Windows.Forms.TextBox();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView1
            // 
            this.dataGridView1.AllowUserToAddRows = false;
            this.dataGridView1.AllowUserToResizeColumns = false;
            this.dataGridView1.AllowUserToResizeRows = false;
            this.dataGridView1.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dataGridView1.BackgroundColor = System.Drawing.Color.Crimson;
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Location = new System.Drawing.Point(51, 65);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.ReadOnly = true;
            this.dataGridView1.Size = new System.Drawing.Size(413, 185);
            this.dataGridView1.TabIndex = 0;
            //this.dataGridView1.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellContentClick);
            // 
            // txtLoadCy
            // 
            this.txtLoadCy.Location = new System.Drawing.Point(401, 360);
            this.txtLoadCy.Name = "txtLoadCy";
            this.txtLoadCy.Size = new System.Drawing.Size(113, 56);
            this.txtLoadCy.TabIndex = 1;
            this.txtLoadCy.Text = "Load List";
            this.txtLoadCy.UseVisualStyleBackColor = true;
            // 
            // txtCreateCy
            // 
            this.txtCreateCy.Location = new System.Drawing.Point(689, 190);
            this.txtCreateCy.Name = "txtCreateCy";
            this.txtCreateCy.Size = new System.Drawing.Size(100, 41);
            this.txtCreateCy.TabIndex = 2;
            this.txtCreateCy.Text = "Create New";
            this.txtCreateCy.UseVisualStyleBackColor = true;
            this.txtCreateCy.Click += new System.EventHandler(this.txtCreateCy_Click);
            // 
            // txtEditCy
            // 
            this.txtEditCy.Location = new System.Drawing.Point(547, 190);
            this.txtEditCy.Name = "txtEditCy";
            this.txtEditCy.Size = new System.Drawing.Size(113, 48);
            this.txtEditCy.TabIndex = 3;
            this.txtEditCy.Text = "Upate";
            this.txtEditCy.UseVisualStyleBackColor = true;
            this.txtEditCy.Click += new System.EventHandler(this.txtEditCy_Click);
            // 
            // txtRemoveCy
            // 
            this.txtRemoveCy.Location = new System.Drawing.Point(82, 360);
            this.txtRemoveCy.Name = "txtRemoveCy";
            this.txtRemoveCy.Size = new System.Drawing.Size(113, 56);
            this.txtRemoveCy.TabIndex = 4;
            this.txtRemoveCy.Text = "Remove";
            this.txtRemoveCy.UseVisualStyleBackColor = true;
            this.txtRemoveCy.Click += new System.EventHandler(this.txtRemoveCy_Click);
            // 
            // txtcloseCy
            // 
            this.txtcloseCy.Location = new System.Drawing.Point(240, 360);
            this.txtcloseCy.Name = "txtcloseCy";
            this.txtcloseCy.Size = new System.Drawing.Size(113, 56);
            this.txtcloseCy.TabIndex = 5;
            this.txtcloseCy.Text = "Close";
            this.txtcloseCy.UseVisualStyleBackColor = true;
            this.txtcloseCy.Click += new System.EventHandler(this.txtcloseCy_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(564, 105);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(33, 13);
            this.label1.TabIndex = 6;
            this.label1.Text = "name";
            // 
            // txtName
            // 
            this.txtName.Location = new System.Drawing.Point(627, 90);
            this.txtName.Multiline = true;
            this.txtName.Name = "txtName";
            this.txtName.Size = new System.Drawing.Size(138, 41);
            this.txtName.TabIndex = 7;
            // 
            // Company_List
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(893, 478);
            this.Controls.Add(this.txtName);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txtcloseCy);
            this.Controls.Add(this.txtRemoveCy);
            this.Controls.Add(this.txtEditCy);
            this.Controls.Add(this.txtCreateCy);
            this.Controls.Add(this.txtLoadCy);
            this.Controls.Add(this.dataGridView1);
            this.Name = "Company_List";
            this.Text = "Company_List";
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridView1;
        private System.Windows.Forms.Button txtLoadCy;
        private System.Windows.Forms.Button txtCreateCy;
        private System.Windows.Forms.Button txtEditCy;
        private System.Windows.Forms.Button txtRemoveCy;
        private System.Windows.Forms.Button txtcloseCy;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtName;
    }
}