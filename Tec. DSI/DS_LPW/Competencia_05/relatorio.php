<?php
    require'C:/xampp/htdocs/aula_5/fpdf/fpdf.php';

    $pdf = new FPDF('P','pt','A4');
    $pdf->AddPage();
    $pdf->SetFont('courier','',12);
    $pdf->Cell(0,30,utf8_decode("Relatório de Pessoas Cadastras"),0,1,'C');
    $pdf->Cell(0,1,"",1,'C');
    $pdf->ln(20);

    include("conexao.php");

    $pdf->SetFont('courier','B',12);
    $pdf->Cell(170,20,utf8_decode("CPF"),1,0,'C');
    $pdf->Cell(170,20,utf8_decode("Nome"),1,0,'C');
    $pdf->Cell(170,20,utf8_decode("Idade"),1,0,'C');
    $pdf->ln(20);
    $pdf->SetFont('courier','',12);

    //criando a query em SQL para selecionar os dados
    $lista = mysqli_query($link, "SELECT * FROM dados");

    //início do da estrutura de repetição
    while ($linha = mysqli_fetch_array($lista)) {
        $pdf->Cell(170,20,utf8_decode($linha["CPF"]),1,0,'C');
        $pdf->Cell(170,20,utf8_decode($linha["Nome"]),1,0,'C');
        $pdf->Cell(170,20,utf8_decode($linha["Idade"]),1,0,'C');
        $pdf->ln(20);
    }
    
    $pdf->Output('Relatorio.pdf', 'I');
?>