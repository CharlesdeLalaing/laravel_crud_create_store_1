<div class="container">
    <form action="/pokemon" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Nom de pokemon</label>
            <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="pikatchu">
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlSelect1">Type de pokemon</label>
            <select class="form-control" name="type" id="exampleFormControlSelect1">
                <option disabled selected value> -- select an option -- </option>
                <option>eau</option>
                <option>feu</option>
                <option>plante</option>
                <option>electrique</option>
                <option>poison</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlSelect2">Niveau de pokemon</label>
            <select name="level">
                <?php for ($i = 1; $i <= 100; $i++) { ?> <option
                    value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
