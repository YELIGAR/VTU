<?php
echo '<div class="news-section">';
echo '<h3>📢 Latest VTU Updates </h3>';

$rss = simplexml_load_file("https://vtu.ac.in/feed/");

if ($rss !== false) {
    $exam_items = [];
    $engineering_items = [];
    $fallback_items = [];

    $exam_keywords = [
        'exam', 'result', 'revaluation', 'hall ticket', 'assessment',
        'timetable', 'schedule', 'makeup', 'supplementary'
    ];

    $other_keywords = [
        'syllabus', 'curriculum', 'scheme', 'cbcs', 'nep', 'model question', 'question paper',
        'circular', 'rules', 'policy', 'eligibility', 'attendance', 'internship', 'fee payment',
        'convocation', 'rank holder', 'gold medalist', 'provisional certificate', 'transcript', 'migration', 'duplicate certificate',
        'e-learning', 'lms', 'lecture notes', 'video tutorial', 'online study material',
        'scholarship', 'placement', 'training', 'college notice', 'anti-ragging', 'disciplinary'
    ];

    function isKannada($text) {
        return preg_match('/[\x{0C80}-\x{0CFF}]/u', $text);
    }

    foreach ($rss->channel->item as $item) {
        $title = (string)$item->title;
        $description = (string)$item->description;
        $link = (string)$item->link;
        $content = strtolower($title . ' ' . $description);

        if (isKannada($title) || isKannada($description)) {
            continue;
        }

        $data = [
            'title' => htmlspecialchars($title),
            'link' => htmlspecialchars($link)
        ];

        $matched_exam = false;
        foreach ($exam_keywords as $keyword) {
            if (strpos($content, $keyword) !== false) {
                $matched_exam = true;
                break;
            }
        }

        if ($matched_exam) {
            array_unshift($exam_items, $data);
            continue;
        }

        $matched_engineering = false;
        foreach ($other_keywords as $keyword) {
            if (strpos($content, $keyword) !== false) {
                $matched_engineering = true;
                break;
            }
        }

        if ($matched_engineering) {
            array_unshift($engineering_items, $data);
        } else {
            array_unshift($fallback_items, $data);
        }

        if (count($exam_items) + count($engineering_items) + count($fallback_items) >= 25) break;
    }

    $final_items = array_slice(array_merge($exam_items, $engineering_items, $fallback_items), 0, 8);

    // ✅ NEW SCROLLING LIST
    echo '<div class="news-scroll-container"><ul>';
    foreach ($final_items as $item) {
        echo "<li><a href='{$item['link']}' target='_blank'>★ {$item['title']}</a></li>";
    }
    echo '</ul></div>';

} else {
    echo "<ul><li>No updates available at the moment.</li></ul>";
}

echo '</div>';
?>
