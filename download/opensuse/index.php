<?php require '../../chunks/doctype.php'; ?>

<title>Suse &nbsp;&middot;&nbsp; Download &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

<?php require '../../chunks/header.php'; ?>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble system opensuse">
                        <h2>Download Midori for Suse</h2>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble standard">
                        <h3>Install Direct</h3>
                        <p class="important">You can also install directly from the Suse repositories with this command, or from the <a href="http://software.opensuse.org/ymp/openSUSE:Factory/standard/midori.ymp?base=openSUSE%3AFactory&query=midori">factory repository</a> for the latest version. You can also download the packages below.</p>
                        <input class="code" type="text" id="dynamic" value="sudo yum install midori" />
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble standard">
                        <h3>Alternative Downloads</h3>
                        <p>These packages are available for download, and can be copied to machines without a connection to be installed. Note that they do not include any dependencies, and may not be updated with the rest of your system by the package manager.</p>
                        <div class="section group">
<?php

include '../../chunks/process.php';

foreach ($xml->download as $download) {
        if ($download->extension == '.rpm') {
                if ($download->architecture == 'i586' || $download->architecture == 'x86-64') {
                        echo '
                                <div class="col span_1_of_2">
                                        <h4><a href="' . $download->location . '#!sha1!' . $download->sum . '">' . $download->architecture . '</a></h4>';
                        $size = $download->size/1048576;
                        $package = ltrim($download->extension, '.');
                        echo '
                                        <p class="center">' . $package . ' &nbsp;&middot;&nbsp; <a href="'.$home.'/changelog/" title="Midori Changelog">' . $download->version . '</a> &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</p>
                                </div>';
                }
        }
}

?>
                        </div>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
        <div class="col span_1_of_6"><br></div>
        <div class="col span_4_of_6">
                <div class="bubble standard">
                        <h3 class="withimg64"><img src="<?php echo $home; ?>/images/feature-help.png" class="sixtyfour floatleft"> Help</h3>
                        <p>If you need to find out how to do something, you can check our <a href="<?php echo $home; ?>/faqs/">Frequently Asked Questions</a>.</p>
                </div>
        </div>
        <div class="col span_1_of_6"><br></div>
</div>

<?php require '../../chunks/footer.php'; ?>
