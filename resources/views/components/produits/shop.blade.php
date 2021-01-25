<!-- Content page -->
<div class="bg0 p-t-85 p-b-95">
    <div class="container">
        <div class="flex-w flex-r-m p-b-45 flex-row-rev">
            <div class="flex-w flex-m p-tb-8">
                {{-- <div class="rs1-select2 bg0 size-w-52 bo-all-1 bocl15 m-tb-7 m-r-15">
                    <select class="js-select2" name="sort">
                        <option>Sort by popularity</option>
                        <option>Sort by best sell</option>
                        <option>Sort by special</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div> --}}

                <div class="flex-w flex-m m-tb-7">
                    <button class="dis-block lh-00 pos-relative how-icon1 m-r-15 js-show-list">
                        <img class="icon-main trans-04" src="assets/images/icons/icon-menu-list.png" alt="ICON">
                        <img class="ab-t-l icon-hov trans-04" src="assets/images/icons/icon-menu-list1.png" alt="ICON">
                    </button>

                    <button class="dis-block lh-00 pos-relative how-icon1 menu-active js-show-grid">
                        <img class="icon-main trans-04" src="assets/images/icons/icon-grid.png" alt="ICON">
                        <img class="ab-t-l icon-hov trans-04" src="assets/images/icons/icon-grid1.png" alt="ICON">
                    </button>
                </div>
            </div>

            <span class="txt-s-101 cl9 m-r-30 size-w-53">
                Showing 1–12 of 23 results
            </span>
        </div>

        <!-- Shop grid -->
        <div class="shop-grid" id="articles">
            @include('components.produits.liste')
            {{-- <liste initarticles="{{$articles}}"></liste> --}}
        </div>
        <!-- Shop list -->
        <!-- Shop list -->
        <div class="shop-list dis-none" id="articles2">
            @include('components.produits.listetwo')
            {{-- <listetwo initarticles="{{$articles}}"></listetwo> --}}
        </div>
    </div>
</div>


