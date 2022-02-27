Public Class Form1

    Private Sub Calculate_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Calculate.Click
        Dim num1, num2, sum As Single
        num1 = 100
        num2 = 200
        sum = num1 + num2
        MsgBox("The sum of " & num1 & " and" & num2 & "is " & sum)

    End Sub
End Class
