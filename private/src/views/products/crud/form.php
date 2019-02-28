<form class="crud-form" method="post">

    <div class="form-group">
        <label for="name">Nom</label>
        <input class="form-control" type="text" name="name" id="name" value="<?= $name ?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description"><?= $description ?></textarea>
    </div>

    <div class="form-group">
        <label for="illustration">Illustration</label>
        <input class="form-control" type="text" name="illustration" id="illustration" value="<?= $illustration ?>">
    </div>

    <div class="form-group">
        <label for="price">Prix</label>
        <input class="form-control" type="number" name="price" id="price" step="0.01" value="<?= $price ?>">
    </div>

    <div class="form-group">
        <label for="type">Type de produit</label>
        <select name="type" id="type" class="form-control">
            <?php foreach(getEnumData("products", "type") as $type): ?>
            <option value="<?= $type ?>"><?= $type ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success btn-block">Valider</button>

</form>