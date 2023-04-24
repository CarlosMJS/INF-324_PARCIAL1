<%@ Page Language="C#" AutoEventWireup="true" CodeFile="index.aspx.cs" Inherits="index" %>

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
    <div class="hola">
        <h1>TE DAMOS LA BIENVENIDA A LA <br/> 
        FACULTAD DE CIENCIAS PURAS Y NATURALES <br/>
        F.C.P.N.</h1>
    </div>
    <div class="row">
        <section class="text-center">

            <div class="card-body py-1 px-md-1" style="
                margin-top: -100px;
                background: hsla(0, 0%, 100%, 0.4);
                backdrop-filter: blur(10px);
                ">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                                <h2 class="fw-bold mb-5">Sign up now</h2>
                                <form id="form1" runat="server">
                                    <h1>Login Page</h1>
                                    <asp:Label ID="errorMsg" runat="server" Text=""></asp:Label>
                                    <div class="form-group">
                                        <asp:Label ID="Username" runat="server" Text="Username" ></asp:Label><br/>
                                        <asp:TextBox ID="TextBoxUsername" runat="server" ></asp:TextBox><br/>
                                        <asp:Label ID="Password" runat="server" Text="Password" ></asp:Label><br/>
                                        <asp:TextBox ID="TextBoxPassword" runat="server" type="password" ></asp:TextBox><br/><br/>
                                        <asp:Button ID="login_button_Click" runat="server" Text="Aceptar" OnClick="Button1_Click" class="btn btn-secondary"/>
                                        <input id="Reset1" type="reset" value="Resetear" class="btn btn-secondary"/>
                                        <br />
                                        <asp:Label ID="LabelError" runat="server" Text="" ></asp:Label>
                                    </div>
                                </form>
                     </div>
                </div>
            </div>
    </section> 
     </div>
</body>
</html>
