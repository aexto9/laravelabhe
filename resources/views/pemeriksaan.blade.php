<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
    <div class="form-group row">
        <label class="col-4 col-form-label" for="nama">Nama</label> 
        <div class="col-8">
        <input id="nama" name="nama" placeholder="Tuliskan Nama Anda" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
        <div class="col-8">
        <input id="tanggal" name="tanggal" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-4 col-form-label">Tanggal Lahir</label> 
        <div class="col-8">
        <input id="date" name="date" type="date" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki - Laki"> 
            <label for="jk_0" class="custom-control-label">Laki - Laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
            <label for="jk_1" class="custom-control-label">Perempuan</label>
        </div>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<table border="1">
    <tr>
        <th>Jenis Tes</th>
        <th>Hasil Pemeriksaan</th>
        <th>Normal</th>
    </tr>
    <tr>
        <td>Tekanan Darah</td>
        <td></td>
        <td>120/80 mmgh</td>
    </tr>
    <tr>
        <td>Asam Urat</td>
        <td></td>
        <td>120/80 mmgh</td>
    </tr>
    <tr>
        <td>Kolesterol Total</td>
        <td></td>
        <td>120/80 mmgh</td>
    </tr>
    <tr>
        <td>Gula Darah</td>
        <td></td>
        <td>120/80 mmgh</td>
    </tr>
</table>