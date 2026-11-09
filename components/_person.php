<?php
function Person(
    string $title = '',
    string $role = '',
    string $image = '',
    string $email = '',
    string $phone = ''
): string {
    $title = htmlspecialchars($title);
    $role  = htmlspecialchars($role);

    $img = $image
        ? '<img class="person__image" src="' . htmlspecialchars($image) . '" alt="' . $title . '">'
        : '<div class="person__image person__image--placeholder">' . mb_substr($title, 0, 1) . '</div>';

    $contact = '';
    if ($email) $contact .= '<a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a>';
    if ($phone) $contact .= '<a href="tel:' . htmlspecialchars($phone) . '">' . htmlspecialchars($phone) . '</a>';

    return <<<HTML
    <div class="person">
        $img
        <h3 class="person__name">$title</h3>
        <p class="person__role">$role</p>
    </div>
    HTML;
}