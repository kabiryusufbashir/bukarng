@extends('layouts.app')

@section('page-title')
    Home - Bukar Nig. Ltd
@endsection

@section('body-content')
    <!-- Banner -->
    <div>
        <img class="object-cover w-full" src="{{ asset('images/bg-2.jpg') }}" alt="Background 1">
    </div>
    <!-- Body contents  -->
    <div class="pt-8 pb-5">
        <!-- About Us  -->
        <div id="about-us" class="lg:px-24 px-8 mt-8">
            <!-- logo  -->
            <div>
                <img class="w-48 mx-auto" src="{{ asset('images/bukarng.png') }}" alt="Bukar Ng Logo">
            </div>
            <!-- About Us  -->
            <div class="text-center lg:w-2/3 mx-auto">
                <p>
                    M Bukar Nig Ltd is a General merchandize company with vast knowledge in Information Technology, Contracts, Import and Export, AgricBusiness, etc
                </p>
                <p>
                    Our team of professionals will handle all the necessary documentation, delivery requirements, and compliance checks for your shipments. Whether it's air or ocean freight forwarding, Tech Port Trading has all the resources needed to make imports and exports seem easy 
                </p>
                <p>
                    M Bukar Nig Ltd tends to build a very trust with our esteemed customers. 
                </p>
            </div>
        </div>
        <!-- Information Technology  -->
        <div id="information-technology" class="bg-gray-100 mt-8 py-4">
            <div class="text-center text-2xl font-medium py-6">Information Technology</div>
            <div class="lg:px-24 px-8 lg:grid grid-cols-3 gap-2">
                <div class="col-span-1">
                    <img class="object-cover h-64" src="{{ asset('images/it.jpg') }}" alt="Information Technology">
                </div>
                <div class="col-span-2">
                    <p class="py-2">
                        The importance of Information Technology in business is vast. It helps each and every business sector in automating its processes and systems to target objectives, generate revenue, and reduce the inefficiency of their work. The value of Business information technology is increasing day by day in areas such as commercial transactions, to fulfill the demands of customers and regulatory requirements
                    </p>
                    <p class="py-2">
                        The purpose behind Business Information Technology is to fulfill the everyday growing needs of industries and to fulfill the growing expectations of customers of every field
                    </p>
                    <p class="py-2">
                        To get success in any business field, there are two non-tangible things including relevant knowledge and information are very important. Business information technology effectively combines management skills and communication technology with the competency of information. With a sound communication system and information, the company can minimize its risks, strengthen its system and give support to its business strategies
                    </p>
                </div>
            </div>
        </div>
        <!-- Import and Export  -->
        <div id="import-export" class="mt-8 py-4">
            <div class="text-center text-2xl font-medium py-6">Export and Import</div>
            <div class="lg:px-24 px-8 lg:grid grid-cols-3 gap-2">
                <div class="col-span-2">
                    <p class="py-2">
                        It is a good bet to claim that you have a decent idea of what Import and Export are about. Importing and Exporting supports the development of national economies and extends the global market.
                    </p>
                    <p class="py-2">
                        It is a good bet to claim that you have a decent idea of what Import and Export are about. Importing and Exporting supports the development of national economies and extends the global market.
                    </p>
                    <p class="py-2">
                        It is a good bet to claim that you have a decent idea of what Import and Export are about. Importing and Exporting supports the development of national economies and extends the global market.
                    </p>
                </div>
                <div class="col-span-1">
                    <img class="object-cover h-64 float-right" src="{{ asset('images/export.jpg') }}" alt="Export and Import">
                </div>
            </div>
        </div>
        <!-- AgriBusiness  -->
        <div id="agri-business" class="bg-gray-100 mt-8 py-4">
            <div class="text-center text-2xl font-medium py-6">AgriBusiness</div>
            <div class="lg:px-24 px-8 lg:grid grid-cols-3 gap-2">
                <div class="col-span-1">
                    <img class="object-cover h-64" src="{{ asset('images/agribusiness-2.jpg') }}" alt="AgricBusiness">
                </div>
                <div class="col-span-2">
                    <p class="py-2">
                        The importance of Information Technology in business is vast. It helps each and every business sector in automating its processes and systems to target objectives, generate revenue, and reduce the inefficiency of their work. The value of Business information technology is increasing day by day in areas such as commercial transactions, to fulfill the demands of customers and regulatory requirements
                    </p>
                    <p class="py-2">
                        The purpose behind Business Information Technology is to fulfill the everyday growing needs of industries and to fulfill the growing expectations of customers of every field
                    </p>
                    <p class="py-2">
                        To get success in any business field, there are two non-tangible things including relevant knowledge and information are very important. Business information technology effectively combines management skills and communication technology with the competency of information. With a sound communication system and information, the company can minimize its risks, strengthen its system and give support to its business strategies
                    </p>
                </div>
            </div>
        </div>
        <!-- Contact Us  -->
        <div id="contact-us" class="mt-8 py-4">
            <div class="text-center text-2xl font-medium py-6">Contact Us</div>
            <div class="lg:px-24 px-8">
                <div class="text-left">
                    <div class="lg:grid grid-cols-4 gap-4 py-16">
                        <div class="col-span-1">
                            <div class="mb-3 flex">
                                <span><i class="fa-solid fa-house"></i></span>
                                <span class="ml-3">No. 33 Tukuntawa Quarters,<br> Off Zoo Road,<br> Kano State Nigeria</span>
                            </div>
                            <div class="mb-3 flex">
                                <span><i class="fa-solid fa-phone"></i></span>
                                <span class="ml-3"><a href="tel:+2348076073192">+ 234 803 277 5753</a></span>
                            </div>
                            <div class="mb-3 flex">
                                <span><i class="fa-solid fa-phone"></i></span>
                                <span class="ml-3"><a href="tel:+2349044580579">+ 234 802 358 1469</a></span>
                            </div>
                            <div class="mb-3 flex">
                                <span><i class="fa-solid fa-envelope"></i></span>
                                <span class="ml-3"><a href="mailto:info@bukarngltd.com">info@bukarngltd.com</a></span>
                            </div>
                            <div class="mb-3 flex">
                                <span><i class="fa-solid fa-globe"></i></span>
                                <span class="ml-3"><a href="https://bukarngltd.com">www.bukarngltd.com</a></span>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <iframe class="w-full lg:h-72 h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.272307516651!2d8.520871314760068!3d11.95563899152794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11ae81634242e759%3A0x7e771ef4b877603b!2sTukuntawa%20Quarters%2C%20Kano!5e0!3m2!1sen!2sng!4v1665734835518!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection