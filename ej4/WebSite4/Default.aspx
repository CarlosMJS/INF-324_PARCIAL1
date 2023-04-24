<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <title>PROGRAMACION MULTIMEDIAL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <div class="btn">
        <a href="./index.aspx" style="text-decoration: none;" >SALIR</a>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row">
            <div class="col-sm-4">
              <h2>U.M.S.A.</h2>
              <img class="img-fluid" src="img/Logo.png" style="max-width: 200px; display: block; margin: 0 auto;"/>
              <h2>Universidad Mayor de San Andrés</h2>
            </div>
            <div class="col-sm-8">
            <img src="img/EscudoFCPN.png"  style="max-width: 400px; display: block; margin: 0 auto;"/>
                <br />
                <h2>TABLA</h2>
                
                

                <form id="form1" runat="server" >
                    <asp:GridView ID="gridResultados" runat="server" AutoGenerateColumns="false">
                        <Columns>
                            <asp:BoundField DataField="Chuquisaca" HeaderText="Chuquisaca" />
                            <asp:BoundField DataField="LaPaz" HeaderText="LaPaz" />
                            <asp:BoundField DataField="Cochabamba" HeaderText="Cochabamba" />
                            <asp:BoundField DataField="Oruro" HeaderText="Oruro" />
                            <asp:BoundField DataField="Potosi" HeaderText="Potosi"  />
                            <asp:BoundField DataField="Tarija" HeaderText="Tarija"/>
                            <asp:BoundField DataField="Santa Cruz" HeaderText="Santa Cruz"  />
                            <asp:BoundField DataField="Beni" HeaderText="Beni"  />
                            <asp:BoundField DataField="Pando" HeaderText="Pando" />
                        </Columns>
                        
                    </asp:GridView>
                </form>
            </div>
      </div>
    </div>
</body>
</html>
