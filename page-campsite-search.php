<?php get_header(); ?>

<div class="row">
  
    <!---Right side content area with slider and intro text and links-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <article id="main-content">
            
            <h1>Campsite Search Page</h1>
 								 <br/>
            <section class="searchformadvance">
                
                                <form role="form" id="searchform" name="searchform" method="get" action="">
                    <br/>
                    <div class="form-group">
                        <label for="campsite">Campsite Name</label>
                        <input name="campsite" type="text" class="form-control textfield" maxlength="20" id="campsite" pattern="[A-Za-z0-9{5} ]+" autofocus placeholder="type name of campsite" title="PLease enter a name of a campsite">
                    </div>
                    <div class="form-group">
                        <label for="area">Campsite Area</label>
                        <input name="area" type="text" class="form-control textfield" maxlength="30" pattern="[A-Za-z0-9{5} ]+" id="area" placeholder="type in location of campsite ">
                    </div>


                    <br/>
                    <input type="submit" name="Submit" id="Submit" value="Submit">
                    <br/>
                </form>

            </section>


            <br/>
        </article>

    </div>


</div>

<?php get_footer(); ?>

