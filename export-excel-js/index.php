<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
</head>
<body>
    <h1>BAI BAPAK KAU</h1>
    <table id="tblToExcl" border="2">
        
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
    </table>

    <button id="button" onclick="htmlTableToExcel('xlsx')">Export HTML Table to EXCEL</button>

    <script type="text/javascript">
        function htmlTableToExcel(type){
         var data = document.getElementById('tblToExcl');
         var excelFile = XLSX.utils.table_to_book(data, {sheet: "sheet1"});
         XLSX.write(excelFile, { bookType: type, bookSST: true, type: 'base64' });
         XLSX.writeFile(excelFile, 'ExportedFile:HTMLTableToExcel.' + type);
     }
 </script>
</body>
</html>