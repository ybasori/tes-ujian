<form action="/cities" method="post">
    <input name="name">
    <button type="submit">Submit</button>
</form>
<table>
    <?php while($city= mysqli_fetch_array($cities) ){ ?>
    <tr>
        <td><?= $city['name'] ?></td><td><form action="/cities/delete" method="post"><input type="hidden" name="id" value="<?= $city['id'] ?>"><button type="submit">Delete</button></form></td>
    </tr>
    <?php } ?>
</table>