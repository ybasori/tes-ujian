<a href="javascript:void(0)" id="new">new Biodata</a>
<form action="" class="form" id="form" method="post" style="display: none;">
    <h3>New</h3>
    <div class="group">
        <label for="" class="label">Nama Lengkap</label>
        <div class="wrap-input">
            <input type="text" class="input" name="full_name">
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Tempat Lahir</label>
        <div class="wrap-input">
            <select id="" class="input" name="place_of_birth_id">
                <?php while($city = mysqli_fetch_array($cities)){ ?>
                <option value="<?=$city['id']?>"><?=$city['name']?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Tanggal Lahir</label>
        <div class="wrap-input">
            <input type="text" class="input" placeholder="yyyy-mm-dd" name="date_of_birth">
        </div>
    </div>
    <div class="group">
        <label for="" class="label">No. Hp</label>
        <div class="wrap-input">
            <input type="text" class="input" name="phone_number">
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Alamat</label>
        <div class="wrap-input">
            <textarea class="input" name="address"></textarea>
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Pendidikan Terakhir</label>
        <div class="wrap-input">
            <select id="" class="input" name="last_education">
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
                <option>D1</option>
                <option>D2</option>
                <option>D3</option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
            </select>
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Agama</label>
        <div class="wrap-input">
                <label for="islam" class="input-radio">
                    <input type="radio" id="islam" name="religion" value="Islam" checked>
                    Islam
                </label>
                <label for="kristen" class="input-radio">
                    <input type="radio" id="kristen" name="religion" value="Kristen">
                    Kristen
                </label>
                <label for="katolik" class="input-radio">
                    <input type="radio" id="katolik" name="religion" value="Katolik">
                    Katolik
                </label>
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Hobi</label>
            <div class="wrap-input">
                <label for="Renang" class="input-radio">
                <input type="radio" id="Renang" name="hobi" value="Renang">
                Renang
            </label>
            <label for="Mancing" class="input-radio">
                <input type="radio" id="Mancing" name="hobi" value="Mancing">
                Mancing
            </label>
            <label for="Game" class="input-radio">
                <input type="radio" id="Game" name="hobi" value="Game">
                Game
            </label>
            <label for="Gibah" class="input-radio">
                <input type="radio" id="Gibah" name="hobi" value="Gibah">
                Gibah
            </label>
            <label for="Programming" class="input-radio">
                <input type="radio" id="Programming" name="hobi" value="Programming" >
                Programming
            </label>
        </div>
    </div>
    <div class="group">
        <div class="wrap-input">
            <button type="submit" class="button-blue">Submit</button>
        </div>
    </div>
</form>
<form action="/biodata/update" class="form" id="formUpdate" method="post" style="display: none;">
    <h3>EDIT</h3>
    <div class="group">
        <label for="" class="label">Nama Lengkap</label>
        <div class="wrap-input">
            <input type="text" class="input" name="full_name" id="full_nameUpdate">
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Tempat Lahir</label>
        <div class="wrap-input">
            <select class="input" name="place_of_birth_id" id="place_of_birth_idUpdate">
                <?php while($city = mysqli_fetch_array($cities1)){ ?>
                <option value="<?=$city['id']?>"><?=$city['name']?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Tanggal Lahir</label>
        <div class="wrap-input">
            <input type="text" class="input" placeholder="yyyy-mm-dd" name="date_of_birth" id="date_of_birthUpdate">
        </div>
    </div>
    <div class="group">
        <label for="" class="label">No. Hp</label>
        <div class="wrap-input">
            <input type="text" class="input" name="phone_number" id="phone_numberUpdate">
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Alamat</label>
        <div class="wrap-input">
            <textarea class="input" name="address" id="addressUpdate"></textarea>
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Pendidikan Terakhir</label>
        <div class="wrap-input">
            <select class="input" name="last_education" id="last_educationUpdate">
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
                <option>D1</option>
                <option>D2</option>
                <option>D3</option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
            </select>
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Agama</label>
        <div class="wrap-input">
                <label for="IslamUpdate" class="input-radio">
                    <input type="radio" id="IslamUpdate" name="religion" value="Islam" checked>
                    Islam
                </label>
                <label for="KristenUpdate" class="input-radio">
                    <input type="radio" id="KristenUpdate" name="religion" value="Kristen">
                    Kristen
                </label>
                <label for="KatolikUpdate" class="input-radio">
                    <input type="radio" id="KatolikUpdate" name="religion" value="Katolik">
                    Katolik
                </label>
        </div>
    </div>
    <div class="group">
        <label for="" class="label">Hobi</label>
            <div class="wrap-input">
                <label for="Renang" class="input-radio">
                <input type="radio" id="RenangUpdate" name="hobi" value="Renang">
                Renang
            </label>
            <label for="Mancing" class="input-radio">
                <input type="radio" id="MancingUpdate" name="hobi" value="Mancing">
                Mancing
            </label>
            <label for="Game" class="input-radio">
                <input type="radio" id="GameUpdate" name="hobi" value="Game">
                Game
            </label>
            <label for="Gibah" class="input-radio">
                <input type="radio" id="GibahUpdate" name="hobi" value="Gibah">
                Gibah
            </label>
            <label for="Programming" class="input-radio">
                <input type="radio" id="ProgrammingUpdate" name="hobi" value="Programming" >
                Programming
            </label>
        </div>
    </div>
    <div class="group">
        <div class="wrap-input">
            <input type="hidden" name="id" value="" id="idUpdate">
            <button type="submit" class="button-blue">Submit</button>
        </div>
    </div>
</form>
<table border=1>
    <thead>
        <tr>
            <td>Full Name</td><td>Tempat Lahir</td><td>Tanggal Lahir</td><td>No Hp</td><td>Alamat</td><td>Pendidikan Terakhir</td><td>Agama</td><td>Hobi</td>
        </tr>
    </thead>
    <?php
        $bios=[];
        $key=0;
        while($biodata= mysqli_fetch_array($biodatas) ){ 
            $bios[$key]['id'] = $biodata['id'];
            $bios[$key]['full_name'] = $biodata['full_name'];
            $bios[$key]['place_of_birth_id'] = $biodata['place_of_birth_id'];
            $bios[$key]['date_of_birth'] = $biodata['date_of_birth'];
            $bios[$key]['phone_number'] = $biodata['phone_number'];
            $bios[$key]['address'] = $biodata['address'];
            $bios[$key]['last_education'] = $biodata['last_education'];
            $bios[$key]['religion'] = $biodata['religion'];
            $bios[$key]['hobi'] = $biodata['hobi'];
    ?>
    <tr>
        <td><?= $biodata['full_name'] ?></td>
        <td><?= $biodata['place_of_birth'] ?></td>
        <td><?= $biodata['date_of_birth'] ?></td>
        <td><?= $biodata['phone_number'] ?></td>
        <td><?= $biodata['address'] ?></td>
        <td><?= $biodata['last_education'] ?></td>
        <td><?= $biodata['religion'] ?></td>
        <td><?= $biodata['hobi'] ?></td>
        
        <td><button class="edit" data-key="<?= $key ?>">Edit</button><form action="/biodata/delete" method="post"><input type="hidden" name="id" value="<?= $biodata['id'] ?>"><button type="submit">Delete</button></form></td>
        <?php 
            $key++;
        ?>
    </tr>
    <?php } ?>
</table>
<script>
    var bios = <?= json_encode($bios); ?>;
    var error =0;
    var key=null;
    document.getElementById("new").addEventListener('click', function(e) {
        var dis = document.getElementById("form").style.display;
        if(dis=="none"){
            document.getElementById("form").style.display="block";
        }
        else{
            document.getElementById("form").style.display="none";
        }
        var disUp = document.getElementById("formUpdate").style.display;
        if(disUp=="block"){
            document.getElementById("formUpdate").style.display="none";
        }
    });
    function errorInput(element){
        var div = document.createElement("div");
        var textnode = document.createTextNode("Invalid");
        div.classList.add("warning");
        div.appendChild(textnode);
        document.querySelector(element).parentElement.appendChild(div);  
        error++;
    }
    function cekTanggal(element){
        var regexDate = /([0-9]{1,})\-([0-9]{2})\-([0-9]{2})/g;
        var value = document.querySelector(element).value;
        if(value==""){
            errorInput(element)
        }
        else {
            if(!regexDate.test(value)){
                errorInput(element)
            }
            else{
                var dt = value.split("-");
                var year = parseInt(dt[0]);
                var month = parseInt(dt[1]);
                var day = parseInt(dt[2]);
                var tigaSatu = [1,3,5,7,8,10,12];

                if((year<1970) || (month<1) || (month>12) || (day<1) || (day>31) || (tigaSatu.indexOf(month)>=0 && day>31) || (tigaSatu.indexOf(month)<0 && day>30) || (month==2 && (year%4==0) && day>29) || (month==2 && (year%4!=0) && day>28)){
                    errorInput(element)
                }
            }
        }
    }
    function cekInput(element){
        var value = document.querySelector(element).value;
        if(value==""){
            errorInput(element)
        }
    }
    var anchors = document.getElementsByClassName('edit');
        for(var i = 0; i < anchors.length; i++) {
    document.getElementsByClassName('edit')[i].addEventListener('click', function(e) {
        console.log(this)
        var disNew = document.getElementById("form").style.display;
        if(disNew=="block"){
            document.getElementById("form").style.display="none";
        }
        var disUp = document.getElementById("formUpdate").style.display;
        if(disUp=="none"){
            document.getElementById("formUpdate").style.display="block";
        }
        key = this.attributes["data-key"].value;

        var data = bios[key];

        document.getElementById("full_nameUpdate").value=data['full_name'];
        document.getElementById("place_of_birth_idUpdate").value=data['place_of_birth_id'];
        document.getElementById("date_of_birthUpdate").value=data['date_of_birth'];
        document.getElementById("phone_numberUpdate").value=data['phone_number'];
        document.getElementById("addressUpdate").value=data['address'];
        document.getElementById("last_educationUpdate").value=data['last_education'];
        document.getElementById(data['religion']+"Update").checked = true;
        document.getElementById(data['hobi']+"Update").checked = true;
        document.getElementById("idUpdate").value = data['id'];
    });
        }
    document.querySelector('#form').addEventListener('submit', function(e) {

            // reset validasi
            error = 0

                var elements = document.getElementsByClassName('warning');
                while(elements.length > 0){
                    elements[0].parentNode.removeChild(elements[0]);
                }

            cekInput("#form input[name='full_name']");
            cekInput("#form input[name='phone_number']");
            cekInput("#form textarea[name='address']");

            cekTanggal("#form input[name='date_of_birth']");

            if(error>0){
                e.preventDefault();
                window.location.href="#form"
            }
        });

        document.querySelector('#formUpdate').addEventListener('submit', function(e) {

            // reset validasi
            error = 0

                var elements = document.getElementsByClassName('warning');
                while(elements.length > 0){
                    elements[0].parentNode.removeChild(elements[0]);
                }

            cekInput("#formUpdate input[name='full_name']");
            cekInput("#formUpdate input[name='phone_number']");
            cekInput("#formUpdate textarea[name='address']");

            cekTanggal("#formUpdate input[name='date_of_birth']");

            if(error>0){
                e.preventDefault();
                window.location.href="#formUpdate"
            }
        });
</script>