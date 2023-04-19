Imports System.Data
Imports MySql.Data.MySqlClient
Imports interfaces_desktop.tools

Public Class Form1
    Dim conexion = New tools
    Dim myCommand As New MySqlCommand
    Dim myAdapter As New MySqlDataAdapter
    Dim myData As New DataTable
    Dim SQL As String
    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load

        conexion.conectar()
        'conexion.consultar()

        Try
            'conexion.con.Open()
            SQL = "Select * From marcas"

            myCommand.Connection = conexion.con
            myCommand.CommandText = SQL

            myAdapter.SelectCommand = myCommand
            myAdapter.Fill(myData)

            dtMarcas.DataSource = myData

            conexion.con.Close()
        Catch myerror As MySqlException
            MessageBox.Show("Error: " & myerror.Message)
        Finally
            conexion.con.Dispose()
        End Try


    End Sub





End Class
