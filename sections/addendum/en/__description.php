<h2 class="item8">Live Chat Olark</h2>
<p>To get your data, you can register on Olark website and do all the required steps to get your code.</p>
<p>Then, open <strong>includes/templates/themeXXX/common/tpl_main_page.php</strong> file and insert the received code
    between the lines 'begin olark code' and 'end olark code' and save the file. To remove Live Chat Olark, simply
    delete this code from tpl_main_page.php file.
<p class="alert alert-info">Customers who purchased the template are provided with 6 months Olark chat usage for
    free. To register 6 months Free bronze package, you should follow <a target="_blank"
                                                                         href="http://olark.com/signup/create_new_account/18981?utm_source=templatemonster&utm_medium=offer&utm_campaign=default">Olark
        registration link</a>.</p>

<h4>
    Loading data from Google servers
</h4>

<p>Some countries have issues connecting to Google servers. This can cause issues loading Google Fonts and Java Script
    libraries from Google CDN. To resolve these issues, please do the following: </p>

<h4>Can't load Google Fonts: </h4>
<ol class="index-list">
    <li>Open \includes\templates\themeXXX\common\html_header.php file</li>
    <li><p>Locate the line:</p>
        <code>$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
    <li><p>Replace it with the following:</p>
        <code>$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
</ol>

<h4>Can't load jQuery</h4>
<ol class="index-list">
    <li><p>Locate the line:</p>
        <code>&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/[---your_jquery_version---]/jquery.min.js">&lt;/script></code>
    </li>
    <li><p>Replace with the following:</p>
        <code>&lt;script src="//code.jquery.com/jquery-[---your_jquery_version---].min.js">&lt;/script></code>
    </li>
</ol>

<p>You can also use local copy of jQuery library. </p>

<h4>W3C validation</h4>
<p class="alert alert-info">Both HTML markup and CSS styles used in our templates are semantically correct and valid.
    However, some W3C errors
    still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3
    features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes we
    have to break some rules.</p>