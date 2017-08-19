<div class="sidebar">
    <div class="widget calendar">
        <div id="calendar"></div>
    </div>
    <!--end of calendar-->
    <div class="publicite">
        <div class="placeholder">
            Publicité
        </div>
    </div>
    <!--end of publicité-->
    <div class="widget filter">
        <h4 class="widget-title">Par quartiers</h4>
        <form action="#">
            <select name="filtre-quartier" id="filtre-quartier">
                <?php for($i = 1; $i <= 10; $i++):?>
                    <option value="QUartier <?php echo $i;?>">Quartier <?php echo $i;?></option>
                <?php endfor; ?>
            </select>
        </form>
    </div>
    <!--end of filter-->
    <div class="publicite">
        <div class="placeholder">
            Publicité
        </div>
    </div>
    <!--end of publicité-->
    <div class="widget">
        <h4 class="widget-title">Établissements à la une</h4>
        <?php for($i = 1; $i <= 5; $i++):?>
            <a href="#">
                <div class="photo_etablissement"><img src="holder.js/80x80"></div>
                <div class="details_etablissement">
                    <div class="nom_etablissement"><?php echo $i;?>. Lorem ipsum dolor sit amet, consectetur</div>
                    <div class="quartier_etablissement">Angondjé 1ère cité, Akanda</div>
                    <div class="desc_etablissement">Aenean faucibus, arcu sed posuere congue, neque orci scelerisque purus</div>
                </div>
            </a>
        <?php endfor; ?>
    </div>
</div>