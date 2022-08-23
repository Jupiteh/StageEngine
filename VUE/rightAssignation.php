<!-- LINK -->
<?php require_once 'link.php' ?>

<!-- rightAssignationController -->
<?php require_once '../CONTROLLER/rightAssignationController.php' ?>

<form method='post'>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value='1' name="company" <?= ($company[0] == 1) ? 'checked' : '' ?>>
        <label class="form-check-label" for="flexCheckDefault">
            Entreprise
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="offer" <?= ($offer == 1) ? 'checked' : '' ?>>
        <label class="form-check-label" for="flexCheckDefault">
            Offre
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="pilote" <?= ($pilote == 1) ? 'checked' : '' ?>>
        <label class="form-check-label" for="flexCheckDefault">
            Pilote
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="delegue" <?= ($delegue == 1) ? 'checked' : '' ?>>
        <label class="form-check-label" for="flexCheckDefault">
            Délégué
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="student" <?= ($student == 1) ? 'checked' : '' ?>>
        <label class="form-check-label" for="flexCheckDefault">
            Etudiant
        </label>
    </div>

    <button type="submit" name='addRight' class="btn btn-primary btn">Assigner les droits aux délégués</button>
</form>