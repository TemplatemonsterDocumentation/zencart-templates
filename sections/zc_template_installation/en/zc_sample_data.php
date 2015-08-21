<h3>How to install Zen Cart sample data </h3>
<p>To make your template look like on the live demo, you need to install the template sample data. Sample data contains
    the website settings, sample products, modules, menus, images, etc. It is useful when you want to see the template
    functionality or the examples of the pages design and layout.</p>
<p>Zen Cart templates are provided with one main SQL file (ZENCART_FULL.sql) that contains all website sample content
    and sample website settings, and seven additional SQL files that can be installed on the existing store for your
    choice. The SQL files can be imported into your database using your database management tool (usually phpMyAdmin) or
    directly through Zen Cart admin panel: <b>Tools > Install SQL Patches</b>.</p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>ZENCART_FULL.sql</dt>
            <dd>contains store and theme settings, sample banners, categories, products settings, megamenu, custom
                block, social icons on the product page, slider on homepage. Use it with clear Zen Cart installation.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ZENCART_SHORT.sql</dt>
            <dd>contains only store and theme settings. Installing short dump won't replace your store goods.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ZENCART_AJAX_SEARCH.sql</dt>
            <dd>provides extended search settings.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ZENCART_CUSTOM_BLOCK.sql</dt>
            <dd>sets the extra editable content blocks.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ZENCART_MEGAMENU.sql</dt>
            <dd>sets the megamenu into your site.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ZENCART_SHORT.sql</dt>
            <dd>contains only store and theme settings.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ZENCART_SLIDER.sql</dt>
            <dd>slider on homepage.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ZENCART_SOCIAL.sql</dt>
            <dd>set of social icons on the product page.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>ZENCART_YOUTUBE.sql</dt>
            <dd>displays YouTube video on the product page.</dd>
        </dl>
    </li>
</ul>
<p class="alert alert-danger">NOTE: All the SQL files can be installed in any order, except ZENCART_FULL that contains
    all the other SQL files and imported into the clear Zen Cart.</p>
<p class="alert alert-danger">ATTENTION: Importing the SQL file to your database will overwrite your existing content
    and website settings. DO NOT import the SQL file if you want to keep the existing content. </p>
<p class="alert alert-danger">NOTE: ALWAYS <a class="white1" href="/help/phpmyadmin-how-to-backup-a-database.html"
                                              target="_blank"> back up your database</a> before performing any
    modifications. </p>
<p>You will get 2 options, either execute SQL query or upload .sql file. The result will be the same either option you
    choose.</p>
<figure class="img-polaroid">
    <img src="img/zc_sql.png" alt="">
</figure>
<p>Click on the '<b>Browse</b>' button and navigate to 'sources' folder of the template package, select the .sql file
    and press the '<b>Upload</b>' button to execute it.</p>
<figure class="img-polaroid">
    <img src="img/zc_sql1.png" alt="">
</figure>
<p class="alert alert-info">Feel free to check the detailed tutorial on <a
        href="/help/files/ZenCart/zen_cart_install_sample_data.htm"
        target="_blank">how to install Zen Cart template sample data</a></p>