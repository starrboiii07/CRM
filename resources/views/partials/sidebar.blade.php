<aside class="fixed lg:static inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 w-64 bg-white dark:bg-dark-700 shadow-lg lg:shadow-none z-40 transition-transform duration-200 ease-in-out" id="sidebar">
<div class="flex flex-col h-full p-4">
<!-- Logo -->
<div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-dark-600">
<div class="flex items-center space-x-2">
<div class="w-8 h-8 rounded-full bg-primary-500 flex items-center justify-center">
<i class="fas fa-users text-white"></i>
</div>
<span class="text-xl font-bold">CRM Pro</span>
</div>
<button class="lg:hidden p-1 rounded-full hover:bg-gray-100 dark:hover:bg-dark-600" id="close-sidebar">
<i class="fas fa-times"></i>
</button>
</div>
<!-- Navigation Menu -->
<nav class="flex-1 mt-6">
<ul class="space-y-2">
<li>
<a class="flex items-center p-3 rounded-lg bg-primary-100 dark:bg-dark-600 text-primary-700 dark:text-primary-400" href="#">
<i class="fas fa-tachometer-alt w-6 text-center"></i>
<span class="ml-3">Dashboard</span>
</a>
</li>
<li>
<a class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-dark-600" href="#">
<i class="fas fa-address-book w-6 text-center"></i>
<span class="ml-3">Client Contacts</span>
</a>
</li>
<li>
<a class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-dark-600" href="#">
<i class="fas fa-bullseye w-6 text-center"></i>
<span class="ml-3">Leads Generation</span>
</a>
</li>
<li>
<a class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-dark-600" href="#">
<i class="fas fa-funnel-dollar w-6 text-center"></i>
<span class="ml-3">Sales Pipeline</span>
</a>
</li>
<li>
<a class="flex items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-dark-600" href="#">
<i class="fas fa-chart-bar w-6 text-center"></i>
<span class="ml-3">Reports &amp; Analytics</span>
</a>
</li>
</ul>
</nav>
<!-- Theme Toggle -->
<div class="p-4 border-t border-gray-200 dark:border-dark-600">
<div class="flex items-center justify-between">
<span>Dark Mode</span>
<button class="relative inline-flex items-center h-6 rounded-full w-11 bg-gray-200 dark:bg-dark-600 transition-colors duration-200" id="theme-toggle">
<span class="sr-only">Toggle dark mode</span>
<span class="inline-block w-4 h-4 transform bg-white rounded-full shadow-md transition-transform duration-200 translate-x-1 dark:translate-x-6"></span>
</button>
</div>
</div>
</div>
</aside>