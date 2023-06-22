<!-- <?php
// ファイルを読み込む

$data = file_get_contents("data.txt");

echo nl2br($data);


?> -->

<html>
<table>


 <table $data>
 <table border="5">
    <tr>
      <th>名前</th>
      <th>出身</th>
      <th>どのタカハシ</th>
    </tr>
    <tr>
      <td>
        <?php
        $name = file_get_contents("data.txt");
        echo  nl2br ($name);
        ?>
      </td>
      <td>
        <?php
        $birthPlace = file_get_contents("data_1.txt");
        echo nl2br($birthPlace);
        ?>
      </td>
      <td>
        <?php
        
        $site = file_get_contents("data_2.txt");
        echo  nl2br($site);
        ?>
      </td>
     </table>
</body>
</table>
<li><a href="index.php">戻る</a>  

</html>