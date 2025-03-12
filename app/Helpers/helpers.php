<?php

if (!function_exists('formatRupiah')) {
    function formatRupiah($number)
    {
        return 'Rp ' . number_format($number, 0, ',', '.') . ',00';
    }
}

if(!function_exists('subscriptionStatus')) {
    function subscriptionStatus($dateMonth, $dateYear): bool
    {
        $dateNow = now();
        $dateSubscription = now()->setYear($dateYear)->setMonth($dateMonth);

        if($dateNow->greaterThan($dateSubscription)) {
            return false;
        }
        else {
            return true;
        }
    }
}

if(!function_exists('subscriptionType')) {
    function subscriptionType($startDate, $endDate): bool
    {
        if (!$startDate || !$endDate) {
            return false;
        }

        $start = $startDate instanceof Carbon\Carbon ? $startDate : Carbon\Carbon::parse($startDate);
        $end = $endDate instanceof Carbon\Carbon ? $endDate : Carbon\Carbon::parse($endDate);

        // Calculate difference in months
        $diffInMonths = $start->diffInMonths($end);

        if ($diffInMonths >= 11 && $diffInMonths <= 13) {
            return 'Yearly';
        } elseif ($diffInMonths >= 0 && $diffInMonths <= 2) {
            return 'Monthly';
        } else {
            return false;
        }
    }
}

if(!function_exists('remainingSubscriptionDays')) {
    function remainingSubscriptionDays($endDate): int
    {
        if (!$endDate) {
            return 0;
        }

        $now = now();
        $end = $endDate instanceof Carbon\Carbon ? $endDate : Carbon\Carbon::parse($endDate);

        if ($now->greaterThan($end)) {
            return 0;
        }

        return $now->diffInDays($end);
    }
}
