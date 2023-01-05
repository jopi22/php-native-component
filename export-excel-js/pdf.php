<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <title>Document</title>
</head>
<body id="printTable">
    <h1>BAI BAPAK KAU</h1>
    <table  border="2">
        <tr>
            <th><img src="imam.jpg" alt=""></th>
            <th>sdasdasdasdasd</th>
        </tr>
      <tr>
          <th style="width: 500px;">No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No.Telp</th>
      </tr>
      <tr>
          <td>1</td>
          <td>Sulaiman</td>
          <td>Jakarta</td>
          <td>0829121223</td>
      </tr>
      <tr>
          <td>2</td>
          <td>Diki Alfarabi Hadi</td>
          <td>Jakarta</td>
          <td>08291212211</td>
      </tr>
      <tr>
          <td>3</td>
          <td>Zakaria</td>
          <td>Medan</td>
          <td>0829121223</td>
      </tr>
      <tr>
          <td>4</td>
          <td>Alvinur</td>
          <td>Jakarta</td>
          <td>02133324344</td>
      </tr>
      <tr>
          <td>5</td>
          <td>Muhammad Rizani</td>
          <td>Jakarta</td>
          <td>08231111223</td>
      </tr>
      <tr>
          <td>6</td>
          <td>Rizaldi Waloni</td>
          <td>Jakarta</td>
          <td>027373733</td>
      </tr>
      <tr>
          <td>7</td>
          <td>Ferdian</td>
          <td>Jakarta</td>
          <td>0829121223</td>
      </tr>
      <tr>
          <td>8</td>
          <td>Fatimah</td>
          <td>Jakarta</td>
          <td>23432423423</td>
      </tr>
      <tr>
          <td>9</td>
          <td>Aminah</td>
          <td>Jakarta</td>
          <td>0829234233</td>
      </tr>
      <tr>
          <td>10</td>
          <td>Jafarudin</td>
          <td>Jakarta</td>
          <td>0829239323</td>
      </tr>
  </tbody>
</table> <br>

<button id="printButton" onclick="print()">Print</button>

<script type="text/javascript">
    window.jsPDF = window.jspdf.jsPDF;
    var docPDF = new jsPDF();
    function print(){
        var elementHTML = document.querySelector("#printTable");
        docPDF.html(elementHTML, {
           callback: function(docPDF) {
              docPDF.save('HTML Linuxhint web page.pdf');
          },
          x: 15,
          y: 15,
          width: 170,
          windowWidth: 650
      });
    }
</script>
</body>
</html>