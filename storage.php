<?php include 'includes/header.php'; ?>
<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-6">
        
        <!-- Main Content -->
        <div class="w-full md:full">
            <div class="bg-gray-800 rounded-lg shadow p-6 mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <h2 class="text-2xl font-bold text-white">Available Storage Facilities</h2>
                    
                    <div class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div class="relative">
                            <input type="text" placeholder="Search location..." class="pl-10 pr-4 py-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-700 text-white text-sm w-full md:w-64">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- Storage Filters -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Storage Type</label>
                        <select class="w-full px-3 py-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-700 text-white text-sm">
                            <option>All Types</option>
                            <option>Cold Storage</option>
                            <option>Controlled Atmosphere</option>
                            <option>Warehouse</option>
                            <option>Refrigerated</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Capacity (kg)</label>
                        <select class="w-full px-3 py-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-700 text-white text-sm">
                            <option>Any Capacity</option>
                            <option>0-500 kg</option>
                            <option>500-2000 kg</option>
                            <option>2000-5000 kg</option>
                            <option>5000+ kg</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Duration</label>
                        <select class="w-full px-3 py-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-700 text-white text-sm">
                            <option>Any Duration</option>
                            <option>1-7 days</option>
                            <option>1-4 weeks</option>
                            <option>1-6 months</option>
                            <option>6+ months</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Sort By</label>
                        <select class="w-full px-3 py-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-gray-700 text-white text-sm">
                            <option>Best Match</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Distance</option>
                        </select>
                    </div>
                </div>
                
                <!-- Storage Listings -->
                <div class="space-y-4">
                    <!-- Storage Facility 1 -->
                    <div class="bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/3 h-48 bg-gray-600 relative">
                                <img src="assets/images/greenvalley.png" alt="Cold Storage" class="w-full h-full object-cover">
                                <div class="absolute top-2 left-2 bg-green-600 text-white text-xs font-bold px-2 py-1 rounded">
                                    Verified
                                </div>
                            </div>
                            <div class="md:w-2/3 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold text-white">Green Valley Cold Storage</h3>
                                        <p class="text-sm text-gray-300 mb-2">
                                            <i class="fas fa-map-marker-alt text-green-400 mr-1"></i> 
                                            Jalandhar, Punjab (12 km away)
                                        </p>
                                    </div>
                                    <div class="bg-green-900 text-green-200 text-xs font-bold px-2 py-1 rounded">
                                        4.8 ★
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <p class="text-xs text-gray-400">Storage Type</p>
                                        <p class="text-sm font-medium text-gray-200">Cold Storage</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-400">Capacity Available</p>
                                        <p class="text-sm font-medium text-gray-200">800 kg</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-400">Temperature Range</p>
                                        <p class="text-sm font-medium text-gray-200">2°C to 8°C</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-400">Price</p>
                                        <p class="text-sm font-medium text-gray-200">₹15/kg/week</p>
                                    </div>
                                </div>
                                
                                <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle text-green-400 mr-2"></i>
                                        <span class="text-xs text-gray-300">24/7 Monitoring • Insurance Available</span>
                                    </div>
                                    <button class="mt-2 sm:mt-0 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md text-sm transition duration-300">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Storage Facility 2 -->
                    <div class="bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/3 h-48 bg-gray-600 relative">
                                <img src="assets/images/agrofresh.png" alt="Warehouse" class="w-full h-full object-cover">
                            </div>
                            <div class="md:w-2/3 p-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-bold text-white">AgroFresh Storage</h3>
                                        <p class="text-sm text-gray-300 mb-2">
                                            <i class="fas fa-map-marker-alt text-green-400 mr-1"></i> 
                                            Ludhiana, Punjab (25 km away)
                                        </p>
                                    </div>
                                    <div class="bg-green-900 text-green-200 text-xs font-bold px-2 py-1 rounded">
                                        4.5 ★
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <p class="text-xs text-gray-400">Storage Type</p>
                                        <p class="text-sm font-medium text-gray-200">Controlled Atmosphere</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-400">Capacity Available</p>
                                        <p class="text-sm font-medium text-gray-200">1500 kg</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-400">Temperature Range</p>
                                        <p class="text-sm font-medium text-gray-200">0°C to 15°C</p>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-400">Price</p>
                                        <p class="text-sm font-medium text-gray-200">₹20/kg/week</p>
                                    </div>
                                </div>
                                
                                <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle text-green-400 mr-2"></i>
                                        <span class="text-xs text-gray-300">Humidity Control • Security</span>
                                    </div>
                                    <button class="mt-2 sm:mt-0 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md text-sm transition duration-300">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="inline-flex rounded-md shadow">
                        <a href="#" class="px-3 py-2 rounded-l-md border border-gray-600 bg-gray-700 text-gray-300 hover:bg-gray-600">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-3 py-2 border-t border-b border-gray-600 bg-green-600 text-white">
                            1
                        </a>
                        <a href="#" class="px-3 py-2 border-t border-b border-gray-600 bg-gray-700 text-gray-300 hover:bg-gray-600">
                            2
                        </a>
                        <a href="#" class="px-3 py-2 rounded-r-md border border-gray-600 bg-gray-700 text-gray-300 hover:bg-gray-600">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
            
            <!-- Storage Tips Section -->
            <div class="bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-xl font-bold text-white mb-4">Storage Tips for Your Crops</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="p-2 bg-green-900 text-green-400 rounded-full mr-3">
                                <i class="fas fa-temperature-low"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-green-400 mb-1">Temperature Control</h4>
                                <p class="text-sm text-gray-300">Maintain optimal temperatures to extend shelf life. Most vegetables require 0-4°C while fruits need 4-8°C.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="p-2 bg-blue-900 text-blue-400 rounded-full mr-3">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-400 mb-1">Humidity Management</h4>
                                <p class="text-sm text-gray-300">Most crops need 85-95% humidity. Use humidifiers or moisture barriers as needed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="p-2 bg-yellow-900 text-yellow-400 rounded-full mr-3">
                                <i class="fas fa-wind"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-yellow-400 mb-1">Ventilation</h4>
                                <p class="text-sm text-gray-300">Ensure proper air circulation to prevent condensation and mold growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="flex items-start">
                            <div class="p-2 bg-purple-900 text-purple-400 rounded-full mr-3">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-purple-400 mb-1">Packaging</h4>
                                <p class="text-sm text-gray-300">Use breathable packaging materials to maintain quality during storage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6">
                    <button class="flex items-center text-green-400 hover:text-green-300">
                        <i class="fas fa-book mr-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>