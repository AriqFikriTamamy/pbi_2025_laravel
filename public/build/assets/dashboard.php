<?php
// Baca data dari file JSON
$companies = json_decode(file_get_contents('companies.json'), true);
$applications = json_decode(file_get_contents('job-applications.json'), true);

// Buat mapping perusahaan berdasarkan id untuk akses cepat
$companiesMap = [];
foreach ($companies as $company) {
    $companiesMap[$company['id']] = $company;
}

// Fungsi untuk menghasilkan HTML tabel aplikasi pekerjaan
function displayJobApplicationsData($jobApplications, $companiesMap)
{
    foreach ($jobApplications as $application) {
        $id = htmlspecialchars($application['id']);
        $company_id = htmlspecialchars($application['company_id']);
        $job_title = htmlspecialchars($application['job_title']);
        $status = htmlspecialchars($application['status']);
        $tracked_at = htmlspecialchars($application['tracked_at']);
        $job_link_url = htmlspecialchars($application['job_link_url']);

        $company_name = isset($companiesMap[$company_id]) ? htmlspecialchars($companiesMap[$company_id]['name']) : 'Unknown Company';

        $moment_full = date("d, M Y \a\\t H:i:s", strtotime($tracked_at));
        $moment_diff = time_elapsed_string($tracked_at);

        echo <<<HTML
        <tr>
            <td>
                <p class="text-center">
                    $id
                </p>
            </td>
            <td class="text-left">
                <a href="./companies.html?id=$company_id" class="link">
                    $company_name
                </a>
            </td>
            <td>
                <a href="./application-details.html?id=$id" class="link">
                    $job_title
                </a>
            </td>
            <td>
                <div class="status-badge status-badge-{$status}">
                    $status
                </div>
            </td>
            <td title="$moment_full" class="moment-from-now">
                $moment_diff
            </td>
            <td>
                <button class="btn" style="margin: auto">
                    <i class="icon" data-lucide="ellipsis"></i>
                </button>
            </td>
        </tr>
HTML;
    }
}

// Fungsi mirip moment().fromNow() di JavaScript
function time_elapsed_string($datetime, $full = false)
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'tahun',
        'm' => 'bulan',
        'w' => 'minggu',
        'd' => 'hari',
        'h' => 'jam',
        'i' => 'menit',
        's' => 'detik',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v;
        } else {
            unset($string[$k]);
        }
    }

    if (!$full)
        $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' yang lalu' : 'baru saja';
}
?>

<!-- Tabel HTML -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Perusahaan</th>
            <th>Judul Pekerjaan</th>
            <th>Status</th>
            <th>Ditambahkan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="application-table-body">
        <?php displayJobApplicationsData($applications, $companiesMap); ?>
    </tbody>
</table>