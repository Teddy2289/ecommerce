<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li> -->
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Dashboard 1</a></li>
                </ul>
            </li>
            <li>

                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Categories</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('categorie')}}">Liste</a></li>
                </ul>
            </li>

            <li>

                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Produits</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('product')}}">Liste</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
