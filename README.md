<h1 align="center">JpGraph Community Edition v4.1.1 (Fork by Hassan Bagheri)</h1>

<p align="center">
<a href="https://packagist.org/packages/hbagheri/jpgraph">
<img src="https://img.shields.io/packagist/v/hbagheri/jpgraph" alt="Packagist Version">
</a>
<a href="https://packagist.org/packages/hbagheri/jpgraph">
<img src="https://img.shields.io/packagist/dm/hbagheri/jpgraph.svg" alt="Packagist Downloads">
</a>
<a href="https://github.com/hbagheri/jpgraph/actions">
<img src="https://github.com/hbagheri/jpgraph/workflows/Tests/badge.svg" alt="GitHub Actions Status">
</a>
</p> 

**این نسخه فورک شده JpGraph Community Edition v4.1.0 است که تنها تغییرات اعمال شده حذف توابع deprecated و سازگاری کامل با PHP 8.2 می‌باشد.**  

---

## درباره این فورک

این فورک بر پایه نسخه [JpGraph Community Edition v4.1.0](https://github.com/amenadiel/jpgraph) ساخته شده است که کاملاً با PHP 8.2 سازگار است و توابع و هشدارهای deprecated حذف یا اصلاح شده‌اند.

تمامی تغییرات فقط به هدف بروزرسانی سازگاری با نسخه‌های جدید PHP انجام شده و هیچ تغییر عملکردی یا ویژگی جدیدی به کتابخانه اضافه نشده است.

این پروژه همچنان کاملاً منطبق با استانداردهای PSR-1, PSR-2 و PSR-4 باقی مانده است.

---

## ویژگی‌ها

- سازگار با PHP 8.2 و حذف هشدارهای deprecated
- حفظ ساختار PSR-4 و namespaces برای autoloading استاندارد
- حفظ تمامی قابلیت‌های اصلی نسخه اصلی JpGraph CE
- توابع و کدهای منسوخ PHP اصلاح شده بدون تغییر در منطق اصلی
- توزیع از طریق Packagist (فورک شخصی hbagheri/jpgraph)

---

## نیازمندی‌ها و نصب

- این نسخه نیازمند PHP 7.2 به بالا است، ولی برای بهترین تجربه PHP 8.2 توصیه می‌شود.
- برای نصب کافی است از composer استفاده کنید:

```sh
composer require hbagheri/jpgraph

