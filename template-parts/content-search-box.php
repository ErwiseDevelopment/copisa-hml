<div class="l-search-box js-search-box py-3">
    
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <form method="GET" action="<?php echo get_home_url( null, '/' ) ?>">

                    <div class="row">

                        <div class="col-lg-9 order-2 order-lg-1">
                            <input 
                            class="w-100 border-0 u-outline-none u-box-shadow-pattern rounded d-block u-font-size-14 u-font-weight-regular u-color-folk-aluminium p-3" 
                            type="search"
                            name="s"
                            placeholder="Pesquisar...">
                        </div>

                        <div class="col-lg-2 order-3 order-lg-2 my-3 my-lg-0 pl-lg-0">
                            <input
                            class="w-100 h-100 border-0 rounded d-block u-font-size-14 u-font-weight-bold u-font-style-italic text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-squid-ink"
                            type="submit"
                            value="Pesquisar">
                        </div>

                        <div class="col-lg-1 order-1 order-lg-3 d-flex justify-content-center align-items-center">
                            <i class="fas fa-times u-font-size-22 u-cursor-pointer js-search-close"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>