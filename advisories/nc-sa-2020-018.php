<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Missing ownership check on remote wipe endpoint (NC-SA-2020-018)</h2>
        <p>18th March 2020</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 7.7 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:L/PR:L/UI:N/S:C/C:N/I:N/A:H">AV:N/AC:L/PR:L/UI:N/S:C/C:N/I:N/A:H</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/639.html">Insecure Direct Object Reference (CWE-639)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/819807">819807</a></p>
        <h3>Description</h3>
        <p>An Insecure direct object reference vulnerability in Nextcloud Server 18.0.2 allowed an attacker to remote wipe devices of other users when sending a malicious request directly to the endpoint.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>18.0.3</strong> (CVE-2020-8154)</li>
<li>Nextcloud Server &lt; <strong>17.0.5</strong> (CVE-2020-8154)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that the Nextcloud Server is upgraded to 18.0.3.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Tommy Suriel - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
