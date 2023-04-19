Imports MySql.Data.MySqlClient


Public Class tools

    Public con As MySqlConnection
    Public servidor As String = "localhost"
    Public basededatos As String = "tcthecase_bd"
    Public usuario As String = "root"
    Public pswd As String = ""

    Public Sub conectar()
        Try
            Dim conexion As New MySqlConnectionStringBuilder()
            conexion.Server = servidor
            conexion.UserID = usuario
            conexion.Password = pswd
            conexion.Database = basededatos
            con = New MySqlConnection(conexion.ToString())
            con.Open()
            MessageBox.Show("Conectado al servidor")
        Catch ex As MySqlException
            MessageBox.Show("No se ha podido conectar al servidor")
        End Try
    End Sub

    Public Sub consultar()
        Dim sql As String = "SELECT * FROM marcas WHERE ID = 1"
        Dim comando As New MySqlCommand(sql)
        comando.Connection = con
        Dim resultado As MySqlDataReader
        resultado = comando.ExecuteReader
        While resultado.Read()
            MsgBox(resultado("descripcion"))
        End While
    End Sub




    'Public Function SelectRows(dataSet As DataSet, connection As String, query As String) As DataSet
    '    Dim conn As New MySqlConnection(connection)
    '    Dim adapter As New MySqlDataAdapter()
    '    adapter.SelectCommand = New MySqlCommand(query, conn)
    '    adapter.Fill(dataSet)
    '    Return dataSet
    'End Function




End Class
