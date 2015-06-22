        <div id="left-sidebar">
            <ul class="sidebar-nav">
                <li>
                    <a class="btn primary" href="music_stream.php"><span class="fa fa-music"></span> <span class="tablet-hide">Música</span></a>
                </li>
                <li>
                    <a class="btn primary" href="busqueda.php"><span class="fa fa-headphones"></span> <span class="tablet-hide">Descubre</span></a>
                </li>
                <li>
                    <!--<a class="btn primary" href="busqueda.php"><span class="fa fa-search"></span> <span class="tablet-hide">Búsqueda</span></a>-->
                    <form>
                        <input type="text" class="btn" placeholder="Búsqueda" onkeyup="showResult(this.value)">
                        <div id="livesearch"></div>
                    </form>
                </li>
            </ul>
        </div>