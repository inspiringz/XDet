<%@ Page Language="C#" %>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<script runat="server">
 
    protected void Button1_Click(object sender, EventArgs e)
    {
        string serverIP=txtServerIP.Text;
        string database=txtDatabase.Text;
        string user=txtUser.Text;
        string pass=txtPass.Text;
        string tableName=txtTableName.Text;
        string colName=txtColName.Text;
        string fileName=txtFileName.Text;
 
        if (serverIP != null & database != null & user != null & pass != null & tableName != null & fileName != null)
        {
 
 
             string connectionString = "server="+serverIP+";database="+database+";uid="+user+";pwd="+pass;
            System.Data.SqlClient.SqlConnection connection = new System.Data.SqlClient.SqlConnection(connectionString);
 
            try
            {             
 
            connection.Open();
            string sqlStr = "select * from "+tableName;
 
            if (colName!="")
            {
 
                sqlStr = "select " + colName + " from " + tableName;              
 
            }
 
            System.Data.DataSet ds = new System.Data.DataSet();
            System.Data.SqlClient.SqlCommand cmd = new System.Data.SqlClient.SqlCommand(sqlStr, connection);
            System.Data.SqlClient.SqlDataAdapter da = new System.Data.SqlClient.SqlDataAdapter(cmd);
            da.Fill(ds);
            System.Data.DataTable dataTable = ds.Tables[0];
 
            if (dataTable.Rows.Count==0)
            { 
                lblInfo.Text = "ûҪݣ";
                lblInfo.ForeColor = System.Drawing.Color.Blue;
                return;
 
            }
 
 
            string filePath = System.IO.Path.GetDirectoryName(Server.MapPath("DataOutExl.aspx"))+"\\DataOut";
            if (!System.IO.Directory.Exists(filePath))
            {
                System.IO.Directory.CreateDirectory(filePath);
            }
            bool outType = RadioButton1.Checked;
            int sum = dataTable.Rows.Count;
            int count = 1;
            int size = 0;
            int tmpNum = 1;
 
            if (txtNum.Text!="")
            {
                size = int.Parse(txtNum.Text);
                count = sum / size+1;
            }
 
 
            for (int z = 0; z < count; z++)
            {
 
            Button1.Text = "ڵ..";
            Button1.Enabled = false;
            lblInfo.Text = "ڵ"+(z+1)+"ݣ"+count+"";
            lblInfo.ForeColor = System.Drawing.Color.Blue;  
 
            System.IO.StreamWriter file = new System.IO.StreamWriter(filePath+"\\" + (z+1) +"_"+fileName, false, Encoding.UTF8);
 
            bool isFirst = true;
            if (outType)
            {
 
 
            file.Write(@"<html><head><meta http-equiv=content-type content='text/html; charset=UNICODE'>
                        <style>*{font-size:12px;}table{background:#DDD;border:solid 2px #CCC;}td{background:#FFF;}
                        .th td{background:#EEE;font-weight:bold;height:28px;color:#008;}
                        div{border:solid 1px #DDD;background:#FFF;padding:3px;color:#00B;}</style>
                        <title>Export Table</title></head><body>");
 
            file.Write("<table border='0' cellspacing='1' cellpadding='3'>");
 
            }
 
            for (int i = size*z; i < dataTable.Rows.Count; i++)
            {
                System.Data.DataRow dataRow = dataTable.Rows[i];
                if (isFirst)
                {
                    if ( outType)
                    {
                        file.Write("<tr class='th'>");
                    }
 
                    for (int j = 0; j < dataTable.Columns.Count; j++)
                    {
 
                        if (outType)
                        {
                            file.Write("<td>");
                        }
 
                        file.Write(dataTable.Columns[j].ColumnName + "     ");
 
                        if (outType)
                        {
                            file.Write("</td>");
                        }
                    }
 
                    if (outType)
                    {
                        file.Write("</tr>");
                    }
 
                    isFirst = false;
                }
 
                if (outType)
                {
                    file.Write("<tr>");
                }
                else
                {
                    file.WriteLine(" ");
                }
 
                for (int k = 0; k < dataTable.Columns.Count; k++)
                {
 
                    if (outType)
                    {
                        file.Write("<td>");
                    }
 
                    file.Write(dataTable.Rows[i][k] + "     ");
 
                    if (outType)
                    {
                        file.Write("</td>");
                    }
                }
 
 
 
                if (outType)
                {
                    file.Write("<tr>");
                }
                else
                {
                    file.WriteLine(" ");
                }
 
 
                if (tmpNum==size)                
                    break;
 
                tmpNum += 1;
 
            }
 
            if (outType)
            {
                file.Write("</table>");
                file.Write("<br /><div>ִгɹ!" + tmpNum + "</div>");
                file.Write("</body></html>");
            }
            else
            {
                file.WriteLine("ִгɹ!" + tmpNum + "!");
            }
 
            file.Dispose();
            file.Close();
            tmpNum = 1;
            }
 
 
            lblInfo.Text = "ɹ";
            lblInfo.ForeColor = System.Drawing.Color.Blue;
            Button1.Enabled = true;
            Button1.Text = "ʼ";
 
 
            }
            catch (Exception ex)
            {
                lblInfo.Text = "ʧܣ" + ex.Message;
                lblInfo.ForeColor = System.Drawing.Color.Red;
 
 
            }finally
            {
                connection.Close();
            }
 
        }
        else
        {
            lblInfo.Text = "дصϢ";
            lblInfo.ForeColor = System.Drawing.Color.Red;
        }
    }
</script>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>ޱҳ</title>
    <style type="text/css">
        .style1
        {
            width: 61%;
        }
        .style2
        {
            height: 23px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div>
 
        <table class="style1">
            <tr>
                <td class="style2" colspan="2" align=center>
                    SQL Server ݵ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    :<a href="http://hi.baidu.com/5427518">'Blog</a></td>
 
            </tr>
            <tr>
                <td>
                    IP:</td>
                <td>
                    <asp:TextBox ID="txtServerIP" runat="server" Width="172px"></asp:TextBox>
                    *</td>
            </tr>
            <tr>
                <td>
                    ݿ⣺</td>
                <td>
                    <asp:TextBox ID="txtDatabase" runat="server" Width="172px"></asp:TextBox>
                    *</td>
            </tr>
            <tr>
                <td>
                    û</td>
                <td>
                    <asp:TextBox ID="txtUser" runat="server" Width="172px"></asp:TextBox>
                    *</td>
            </tr>
            <tr>
                <td>
                    룺</td>
                <td>
                    <asp:TextBox ID="txtPass" runat="server" Width="172px"></asp:TextBox>
                    *</td>
            </tr>
            <tr>
                <td>
                    </td>
                <td>
                    <asp:TextBox ID="txtTableName" runat="server" Width="172px"></asp:TextBox>
                    *</td>
            </tr>
             <tr>
                <td>
                    </td>
                <td>
                    <asp:TextBox ID="txtColName" runat="server" Width="172px"></asp:TextBox>
                &nbsp; ֮á,ֿдȫ</td>
            </tr>
             <tr>
                <td>
                    </td>
                <td>
                    <asp:TextBox ID="txtNum" runat="server" Width="172px"></asp:TextBox>
                    &nbsp; ݶʱʹ</td>
            </tr>
            <tr>
                <td>
                    ļ</td>
                <td>
                    <asp:TextBox ID="txtFileName" runat="server" Width="172px"></asp:TextBox>
                    *</td>
            </tr>
            <tr>
                <td>
                    ļʽ</td>
                <td>
                    <asp:RadioButton ID="RadioButton1" runat="server" GroupName="type" Checked="true" Text="html" />
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <asp:RadioButton ID="RadioButton2" runat="server" GroupName="type" Text="txt" />
                </td>
            </tr>
             <tr>
                <td class="style2" colspan="2" align="center">
                    <asp:Button ID="Button1" runat="server" Text="ʼ" onclick="Button1_Click" />
                 </td>
 
            </tr>
            <tr>
                <td colspan="2">
                    <asp:Label ID="lblInfo" runat="server" Text=""></asp:Label>
                    </td>
 
            </tr>
        </table>
 
    </div>
    </form>
</body>
</html>
