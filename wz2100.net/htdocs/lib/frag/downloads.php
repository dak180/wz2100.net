<?php
	// Text fragments for easy editing and reuse.
?>


<?php
	// Windows Section

function wz_frag_win_version_stable()
// Windows' version line (stable)
{
?>
        <p class="byline">
          For Windows XP, Vista, or 7
        </p>
<?php
}

function wz_frag_win_version_beta()
// Windows' version line (beta)
{
?>
        <p class="byline">
          For Windows XP, Vista, or 7
        </p>
<?php
}

function wz_frag_win_vidnotes()
// Windows video install notes
{
?>
        <p style="margin-top:1em">
          <strong>Note:</strong> The installer will install these videos automatically. Follow these instructions only if the installer fails, or if you wish to install offline.
        </p>
        <p>
          <strong>Video instructions:</strong> Place <code>sequences.wz</code> in <code><strong>Program Files/Warzone 2100/sequences.wz</strong></code>.
        </p>
        <p>
          <strong>Warning:</strong> If the file you downloaded is <code>sequences.zip</code>, please rename it to <code>sequences.wz</code> . <strong>DO NOT EXTRACT IT</strong>.
        </p>
<?php
}
?>


<?php
	// Mac Section

function wz_frag_mac_notes()
// Mac general notes section
{
?>
        <h3>Notes</h3>
        <ol>
          <li>You need X11 installed (should come by default since 10.5), which can be found on the install DVD.</li>
          <li>If you have a Nvidia based Mac on 10.5.6-10.5.9, there is a bug that makes the game look wrong. To fix, upgrade to 10.6 or higher, or use <a href="http://www.insanelymac.com/forum/lofiversion/index.php/t132089.html">these custom Nvidia drivers</a>.</li>
        </ol>
<?php
}

function wz_frag_mac_vidnotes()
// Mac vid install notes
{
?>
        <p style="margin-top:1em">
          <strong>Note:</strong> The standard download comes with standard quality videos. If you wish, to make upgrades faster, you can download the no-video version and the videos separately, and install them using the instructions below.
        </p>
        <p>
          <strong>Video instructions:</strong> Place <code>sequences.wz</code> in <code><strong>~/Library/Application Support/Warzone 2100 2.3/sequences.wz</strong></code>
        </p>
<?php
}
?>


<?php
	// Src Section

function wz_frag_src_version_stable()
// Src's version line (stable)
{
?>
        <p class="byline">
          For Linux, BSD, or other operating systems
        </p>
        <p>
          Warzone is available in most distributions' repositories, although it may be out of date. The latest version can be downloaded here.
        </p>
<?php
}

function wz_frag_src_version_beta()
// Src's version line (beta)
{
?>
        <p class="byline">
          For Linux, BSD, or other operating systems
        </p>
<?php
}

function wz_frag_src_notes()
// Src general notes section
{
?>
        <p>
          For instructions, see <a href="<?php echo $protocol; ?>developer.wz2100.net/wiki/CompileGuideLinux">Linux Compile Guide</a>.
        </p>
<?php
}
?>


<?php
	// General Section

function wz_frag_vid_buttons()
// Video Download Buttons
{
?>
        <div class="downloadbtn" style="float:left;">
          <a href="<?php echo @$WARZONE['videos']['hq'] ?>" class="betaversion"><em>Download videos</em> <strong>high quality</strong> <sub><?php echo @$WARZONE['videos']['hq_size']; ?></sub></a>
        </div>
        <div class="downloadbtn" style="float:left;">
          <a href="<?php echo @$WARZONE['videos']['std'] ?>" class="betaversion"><em>Download videos</em> <strong>standard quality</strong> <sub><?php echo @$WARZONE['videos']['std_size']; ?></sub></a>
        </div>
        <div class="downloadbtn" style="float:left;">
          <a href="<?php echo @$WARZONE['videos']['lq'] ?>" class="betaversion"><em>Download videos</em> <strong>low quality</strong> <sub><?php echo @$WARZONE['videos']['lq_size']; ?></sub></a>
        </div>
<?php
}

function wz_frag_systemrecs_stable()
// System requirements for the stable version.
{
?>
      <div class="content-box">
        <h2>System requirements</h2>
        <p>These are approximate.</p>
        <ul>
          <li>At least 1 GHz CPU</li>
          <li>At least 128 MB VRAM</li>
          <li>OpenGL 1.4 (make sure you have the latest drivers installed)</li>
          <li>At least 100 MB free RAM for the game</li>
          <li>At least 100 MB HD space for the game, up to 600 MB extra for the standard videos</li>
        </ul>
        <p>Operating system - one of:</p>
        <ul>
          <li>Windows XP SP3 or higher</li>
          <li>Mac OS X 10.4 or higher</li>
          <li>Linux or BSD</li>
          <li>You will most likely need the latest version of the drivers for your video card.</li>
        </ul>
      </div>
<?php
}

function wz_frag_old_versions()
// Other / older / git versions
{
?>
      <div class="content-box-margin">
        <p>Older versions of Warzone 2100 are available at <a href="https://sourceforge.net/projects/warzone2100/files/">our Sourceforge mirror</a>, and even older releases at <a href="http://download.gna.org/warzone/releases/">our GNA mirror</a>.</p>
        <p>Experimental builds are available at <a href="<?php echo $protocol; ?>developer.wz2100.net/wiki/ExperimentalBuilds">the Experimental Builds wiki page.</a></p>
      </div>
      <div class="content-box-margin">
        <h2>Git</h2>
        <p>Our git repository is located at:</p>
        <blockquote><p><code>git://github.com/Warzone2100/warzone2100.git</code></p></blockquote>
        <p><a href="<?php echo $protocol; ?>developer.wz2100.net/browser/?rev=master">Browse repository online</a></p>
        <p>For more development information, see <a href="<?php echo $protocol; ?>developer.wz2100.net/">Development</a></p>
      </div>
<?php
}
?>
