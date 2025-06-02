<div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="add-lead-modal">
<div class="bg-white dark:bg-dark-700 rounded-xl shadow-lg w-full max-w-md mx-4">
<div class="p-6">
<div class="flex justify-between items-center mb-4">
<h3 class="text-xl font-semibold">Add New Lead</h3>
<button class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-dark-600" id="close-modal">
<i class="fas fa-times"></i>
</button>
</div>
<form method="POST" action="{{ route('leads.store') }}" class="space-y-4">
    @csrf
<div>
<label class="block text-sm font-medium mb-1">Full Name</label>
<input class="w-full px-3 py-2 border border-gray-300 dark:border-dark-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800" type="text"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">Email</label>
<input class="w-full px-3 py-2 border border-gray-300 dark:border-dark-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800" type="email"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">Phone</label>
<input class="w-full px-3 py-2 border border-gray-300 dark:border-dark-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800" type="tel"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">Company</label>
<input class="w-full px-3 py-2 border border-gray-300 dark:border-dark-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800" type="text"/>
</div>
<div>
<label class="block text-sm font-medium mb-1">Position</label>
<input class="w-full px-3 py-2 border border-gray-300 dark:border-dark-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-dark-800" type="text"/>
</div>
<div class="pt-2">
<button class="w-full py-2 bg-primary-500 hover:bg-primary-600 text-white rounded-lg transition-colors" type="submit">
                            Save Lead
                        </button>
</div>
</form>
</div>
</div>
</div>