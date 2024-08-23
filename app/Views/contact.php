<section class="order" id="contact">
    <h3 class="sub-heading">Reserver maitenant</h3>
    <h1 class="heading">Free and fast</h1>
    <form action="index.php" method="get">
        <div class="inputbox">
            <div class="input">
                <span>Votre nom</span>
                <input required type="text" placeholder="Entrer votre nom" name="nom">
            </div>
            <div class="input">
                <span>Votre contact</span>
                <input required type="text" placeholder="Votre Telephone ou Email" name="nume">
            </div>
        </div>
        <div class="inputbox">
            <!-- <div class="input">
                <span>Votre Lieu</span>
                <input required type="text" placeholder="Ou souhaitez vous aller">
                <select name="provs" id="">
                    <option value="Tout">Tout</option>
                    <option value="Antsiranana">Antsiranana</option>
                    <option value="Tamatave">Tamatave</option>
                    <option value="Mahajanga">Mahajanga</option>
                    <option value="Antsiranana">Tananarivo</option>
                    <option value="Antsiranana">Fianarantsoa</option>
                    <option value="Antsiranana">Toliara</option>
                </select>
            </div> -->
            <!-- <div class="input">
                <span>Date et heure</span>
                <input required type="datetime-local" name="date">
            </div> -->
        </div>
        <div class="inputbox">
            <div class="input">
                <span>Votre address</span>
                <textarea placeholder="Entrer votre address" name="address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>Votre Message</span>
                <textarea placeholder="Entrer votre message" name="message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input required type="submit" value="Envoyer" class="btn" name="submit" align="center">
    </form>
</section>