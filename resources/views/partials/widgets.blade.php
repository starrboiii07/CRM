<section class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Calendar Widget -->
<div class="bg-white dark:bg-dark-700 rounded-xl shadow-sm p-6">
<div class="flex justify-between items-center mb-4">
<h2 class="text-lg font-semibold">Calendar</h2>
<button class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white rounded-lg text-sm flex items-center space-x-1 transition-colors">
<i class="fas fa-plus text-xs"></i>
<span>New Event</span>
</button>
</div>
<div class="flex items-center justify-center mb-4">
<div class="w-16 h-16 rounded-full bg-yellow-100 dark:bg-yellow-900 flex items-center justify-center">
<i class="fas fa-sun text-yellow-500 dark:text-yellow-300 text-2xl"></i>
</div>
</div>
<div class="text-center mb-4">
<p class="text-2xl font-bold">Today</p>
<p class="text-gray-500 dark:text-gray-400">June 15, 2023</p>
</div>
<div class="text-center">
<p class="text-gray-600 dark:text-gray-300">No events scheduled</p>
</div>
</div>
<!-- Tasks Widget -->
<div class="bg-white dark:bg-dark-700 rounded-xl shadow-sm p-6">
<div class="flex justify-between items-center mb-4">
<h2 class="text-lg font-semibold">Open Tasks</h2>
<button class="px-3 py-1 bg-primary-500 hover:bg-primary-600 text-white rounded-lg text-sm flex items-center space-x-1 transition-colors">
<i class="fas fa-plus text-xs"></i>
<span>Add Task</span>
</button>
</div>
<ul class="space-y-3">
<li class="flex items-start">
<input class="mt-1 rounded text-primary-500 focus:ring-primary-500" type="checkbox"/>
<div class="ml-3">
<p class="text-sm font-medium">Follow up with Sarah Johnson</p>
<p class="text-xs text-gray-500 dark:text-gray-400">Due tomorrow</p>
</div>
</li>
<li class="flex items-start">
<input class="mt-1 rounded text-primary-500 focus:ring-primary-500" type="checkbox"/>
<div class="ml-3">
<p class="text-sm font-medium">Prepare sales presentation</p>
<p class="text-xs text-gray-500 dark:text-gray-400">Due in 2 days</p>
</div>
</li>
<li class="flex items-start">
<input class="mt-1 rounded text-primary-500 focus:ring-primary-500" type="checkbox"/>
<div class="ml-3">
<p class="text-sm font-medium">Send contract to Michael Chen</p>
<p class="text-xs text-gray-500 dark:text-gray-400">Due in 3 days</p>
</div>
</li>
<li class="flex items-start">
<input class="mt-1 rounded text-primary-500 focus:ring-primary-500" type="checkbox"/>
<div class="ml-3">
<p class="text-sm font-medium">Schedule meeting with DataSystems</p>
<p class="text-xs text-gray-500 dark:text-gray-400">Due next week</p>
</div>
</li>
</ul>
</div>
</section>