<?php
/*
 *   Crafted On Tue Oct 08 2024
 *   From his finger tips, through his IDE to your deployment environment at full throttle with no bugs, loss of data,
 *   fluctuations, signal interference, or doubt—it can only be
 *   the legendary coding wizard, Martin Mbithi (martin.mbithi@makueni.go.ke, www.martmbithi.github.io)
 * 
 *   www.makueni.go.ke
 *   info@makueni.go.ke
 *
 *
 *   The Government Of Makueni DevSecOps Band User License Agreement
 *   Copyright (c) 2023 Government of Makueni County
 *
 *
 *   1. LICENSE TO RULE
 *   Welcome to the elite club! Crafted by the ingenious Martin Mbithi, this software comes with the all-powerful,
 *   revocable, personal, non-exclusive, and non-transferable right to install and activate this masterpiece on ONE  
 *   lucky computer for your official, non-commercial escapades. Got a commercial itch? Better get that license first. 
 *   No peeking, sharing, or showing off this software to anyone else—strictly against the rules!
 *
 *   2. COPYRIGHT POWER
 *   This software, a creation of Martin Mbithi under the banner of the Government Of Makueni DevSecOps Band, is guarded by 
 *   copyright law and international treaties. So, don’t even think about messing with the proprietary notices, labels, 
 *   or marks—what’s his stays his!
 *
 *
 *   3. USE IT RIGHT OR LOSE IT
 *   You may not, and you may not let your fellow geeks:
 *   (a) hack, reverse engineer, decompile, decode, decrypt, disassemble, or attempt any sorcery to reveal the source code;
 *   (b) modify, remix, distribute, or create spinoffs of this masterpiece;
 *   (c) make copies (aside from your trusty backup), distribute, show off in public, transmit, sell, rent, lease, or otherwise
 *   exploit this software like it’s yours. Spoiler: it’s not!
 *
 *
 *   4. GAME OVER, MAN!
 *   This license is your golden ticket until one of us says otherwise. Want to end it? Smash the software and all its copies into
 *   digital dust. Break any rules? The license self-destructs, and you’ll need to nuke all copies—no second chances!
 *
 *
 *   5. NO PIXEL-PERFECT PROMISES
 *   Martin Mbithi and the Government Of Makueni DevSecOps Band don’t guarantee this software is glitch-free—think of it as a feature
 *   not a bug! We disclaim all other warranties, whether expressed or implied, including, but not limited to, implied warranties of merchantability
 *   fitness for a particular purpose, and non-infringement of third-party rights. Some jurisdictions have their own funky rules, so your mileage may
 *   vary. But remember: use at your own risk, brave user!
 *
 *
 *   6. KEEP THE PARTY GOING
 *   If a court zaps any part of this license, no worries—the rest of it keeps the party alive. One piece fails, but the agreement stands strong!
 *
 *
 *   7. NO DRAMA, NO DAMAGES
 *   Under no circumstances shall Martin Mbithi, the Government Of Makueni DevSecOps Band, or their minions be held responsible for any wild, indirect
 *   or accidental chaos from using this software—even if we warned you! And if you think you’ve got a claim, the most you’re getting is what you paid for the 
 *   license—if anything. Keep calm and code on!
 *
 */

$today = date('Y-m-d');
$tomorrow = date('Y-m-d', strtotime('tomorrow'));
$fetch_records_sql = mysqli_query(
    $mysqli,
    "SELECT * FROM logs l
    INNER JOIN users u ON u.user_id = l.log_user_id
    WHERE l.log_date BETWEEN '{$today}' AND '{$tomorrow}' ORDER BY l.log_id DESC LIMIT 5"
);
if (mysqli_num_rows($fetch_records_sql) > 0) {
    while ($return_results = mysqli_fetch_array($fetch_records_sql)) {
        $user_agent = $return_results['log_device'];
        /* Get Exact Browser */
        if (preg_match('/Firefox\/[\d\.]+/', $user_agent, $matches)) {
            $browser = $matches[0];  // Extract Firefox version
        } elseif (preg_match('/Chrome\/[\d\.]+/', $user_agent, $matches)) {
            $browser = $matches[0];  // Extract Chrome version
        } elseif (preg_match('/Safari\/[\d\.]+/', $user_agent, $matches) && !preg_match('/Chrome/', $user_agent)) {
            $browser = $matches[0];  // Extract Safari version (exclude Chrome, which also contains "Safari")
        } elseif (preg_match('/Opera|OPR\/[\d\.]+/', $user_agent, $matches)) {
            $browser = $matches[0];  // Extract Opera version
        } elseif (preg_match('/Edge\/[\d\.]+/', $user_agent, $matches)) {
            $browser = $matches[0];  // Extract Edge version
        } elseif (preg_match('/MSIE|Trident\/[\d\.]+/', $user_agent, $matches)) {
            $browser = 'Internet Explorer';  // Handle IE (older versions)
        } else {
            $browser = "Unknown Browser";
        }

        /* Get Operating System */
        if (preg_match('/Android/', $user_agent)) {
            $os = 'Android';
        } elseif (preg_match('/Linux/', $user_agent)) {
            $os = 'Linux';
        } elseif (preg_match('/Windows NT 10.0/', $user_agent)) {
            $os = 'Windows 10';
        } elseif (preg_match('/Windows NT 6.3/', $user_agent)) {
            $os = 'Windows 8.1';
        } elseif (preg_match('/Windows NT 6.2/', $user_agent)) {
            $os = 'Windows 8';
        } elseif (preg_match('/Windows NT 6.1/', $user_agent)) {
            $os = 'Windows 7';
        } elseif (preg_match('/Windows NT 5.1/', $user_agent)) {
            $os = 'Windows XP';
        } elseif (preg_match('/Mac OS X [\d_\.]+/', $user_agent, $matches)) {
            $os = str_replace('_', '.', $matches[0]);  // Extract Mac OS version
        } elseif (preg_match('/iPhone|iPad|iPod/', $user_agent)) {
            $os = 'iOS';
        } else {
            $os = "Unknown OS";
        }
?>
        <li class="timeline-item">
            <div class="timeline-status bg-primary is-outline"></div>
            <div class="timeline-date"><?php echo date('g:ia', strtotime($return_results['log_date'])); ?> <em class="icon ni ni-check text-success"></em></div>
            <div class="timeline-data">
                <h6 class="timeline-title"><?php echo $return_results['user_names']; ?></h6>
                <div class="timeline-des">
                    <p>
                        Logged in sucessfully using IP Address <span class="text-success"><?php echo $return_results['log_ip_address']; ?></span>,
                        <span class="text-success"><?php echo $browser; ?></span> on <span class="text-success"><?php echo $os; ?></span>.
                    </p>
                </div>
            </div>
        </li>
<?php }
} ?>