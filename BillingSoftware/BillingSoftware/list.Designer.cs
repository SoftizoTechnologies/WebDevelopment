namespace BillingSoftware
{
    partial class list
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(list));
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.txtName = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.txtEditCy = new System.Windows.Forms.Button();
            this.txtCreateCy = new System.Windows.Forms.Button();
            this.txtcloseCy = new System.Windows.Forms.Button();
            this.txtRemoveCy = new System.Windows.Forms.Button();
            this.txtLoadCy = new System.Windows.Forms.Button();
            this.label2 = new System.Windows.Forms.Label();
            this.txtCid = new System.Windows.Forms.TextBox();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView1
            // 
            this.dataGridView1.AllowUserToAddRows = false;
            this.dataGridView1.AllowUserToDeleteRows = false;
            this.dataGridView1.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Location = new System.Drawing.Point(55, 78);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.ReadOnly = true;
            this.dataGridView1.Size = new System.Drawing.Size(332, 153);
            this.dataGridView1.TabIndex = 0;
            this.dataGridView1.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellClick);
            // 
            // txtName
            // 
            this.txtName.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtName.Location = new System.Drawing.Point(490, 177);
            this.txtName.Name = "txtName";
            this.txtName.Size = new System.Drawing.Size(156, 26);
            this.txtName.TabIndex = 11;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Transparent;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(431, 180);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(53, 20);
            this.label1.TabIndex = 10;
            this.label1.Text = "name";
            // 
            // txtEditCy
            // 
            this.txtEditCy.Location = new System.Drawing.Point(308, 303);
            this.txtEditCy.Name = "txtEditCy";
            this.txtEditCy.Size = new System.Drawing.Size(112, 37);
            this.txtEditCy.TabIndex = 9;
            this.txtEditCy.Text = "Upate";
            this.txtEditCy.UseVisualStyleBackColor = true;
            this.txtEditCy.Click += new System.EventHandler(this.txtEditCy_Click);
            // 
            // txtCreateCy
            // 
            this.txtCreateCy.Location = new System.Drawing.Point(190, 303);
            this.txtCreateCy.Name = "txtCreateCy";
            this.txtCreateCy.Size = new System.Drawing.Size(99, 37);
            this.txtCreateCy.TabIndex = 8;
            this.txtCreateCy.Text = "Create New";
            this.txtCreateCy.UseVisualStyleBackColor = true;
            this.txtCreateCy.Click += new System.EventHandler(this.txtCreateCy_Click);
            // 
            // txtcloseCy
            // 
            this.txtcloseCy.Location = new System.Drawing.Point(582, 299);
            this.txtcloseCy.Name = "txtcloseCy";
            this.txtcloseCy.Size = new System.Drawing.Size(112, 41);
            this.txtcloseCy.TabIndex = 14;
            this.txtcloseCy.Text = "Close";
            this.txtcloseCy.UseVisualStyleBackColor = true;
            this.txtcloseCy.Click += new System.EventHandler(this.txtcloseCy_Click);
            // 
            // txtRemoveCy
            // 
            this.txtRemoveCy.Location = new System.Drawing.Point(446, 299);
            this.txtRemoveCy.Name = "txtRemoveCy";
            this.txtRemoveCy.Size = new System.Drawing.Size(112, 41);
            this.txtRemoveCy.TabIndex = 13;
            this.txtRemoveCy.Text = "Remove";
            this.txtRemoveCy.UseVisualStyleBackColor = true;
            this.txtRemoveCy.Click += new System.EventHandler(this.txtRemoveCy_Click);
            // 
            // txtLoadCy
            // 
            this.txtLoadCy.Location = new System.Drawing.Point(44, 303);
            this.txtLoadCy.Name = "txtLoadCy";
            this.txtLoadCy.Size = new System.Drawing.Size(112, 37);
            this.txtLoadCy.TabIndex = 12;
            this.txtLoadCy.Text = "Load ";
            this.txtLoadCy.UseVisualStyleBackColor = true;
            this.txtLoadCy.Click += new System.EventHandler(this.txtLoadCy_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.Transparent;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(442, 131);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(25, 20);
            this.label2.TabIndex = 15;
            this.label2.Text = "Id";
            // 
            // txtCid
            // 
            this.txtCid.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtCid.Location = new System.Drawing.Point(490, 131);
            this.txtCid.Name = "txtCid";
            this.txtCid.Size = new System.Drawing.Size(156, 26);
            this.txtCid.TabIndex = 16;
            // 
            // list
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("$this.BackgroundImage")));
            this.ClientSize = new System.Drawing.Size(775, 452);
            this.Controls.Add(this.txtCid);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtcloseCy);
            this.Controls.Add(this.txtRemoveCy);
            this.Controls.Add(this.txtLoadCy);
            this.Controls.Add(this.txtName);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txtEditCy);
            this.Controls.Add(this.txtCreateCy);
            this.Controls.Add(this.dataGridView1);
            this.Name = "list";
            this.Text = "list";
            this.Load += new System.EventHandler(this.list_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridView1;
        private System.Windows.Forms.TextBox txtName;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button txtEditCy;
        private System.Windows.Forms.Button txtCreateCy;
        private System.Windows.Forms.Button txtcloseCy;
        private System.Windows.Forms.Button txtRemoveCy;
        private System.Windows.Forms.Button txtLoadCy;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtCid;
    }
}