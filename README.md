## Personel Tayin Uygulaması

Personel tayin uygulama projesi kapsamında, kullanıcı kurum tarafından kendisine atanmış olan sicil numarası ve şifresi ile sisteme giriş yaparak tayin talebinde bulunabilir. Bunun yanında kullanıcı sisteme giriş yaptığında kendisine ait kişisel bilgilerini görüntüleyebilir. 

## Projenin Çalışması İçin Gerekli Yazılımlar

- Proje mysql veritabanı ile çalışır. Bunun için sisteminizde MySQL kurulu olmak zorundadır.
- Xampp ile PHP ve MYSQL kurulumu yapılabilir.
- PHP 8.2 sürümü veya daha üzeri gereklidir. 

## Projenin Kurulumu

- Projeyi indirmek için [tayinCase](https://github.com/lazcansar/tayinCase) tıklayarak Github reposundan indirin.
- İndirme işlemi tamamlandıktan sonra sıkıştırılmış dosya bir klasör içerisine ayıklanır.
- Projenin kök dizini içerisinde aşağıdaki komutlar sırası ile çalıştırılır ve projenin çalışması için gerekli bağımlılıklar kurulur.
- composer install
- npm install

## Projenin Çalıştırılması

- Proje PHP Framework'u olan Laravel 12 sürümü ile hazırlanmıştır.
- Projeyi çalıştırmak için tayinCase.zip içerisinde bulunan sql dosyasını PhpMyAdmin paneli üzerinden veya komut satırı yardımı ile tayin adında oluşturacağınız veritabanı tablosunun içerisine import edin.
- Devamında "php artisan migrate" komutu ile veritabanı migration işlemlerinin tamamlanmasını bekleyin.
- Bu işlem sorunsuz tamamlandığında "php artisan serve" ve "npm run dev" komutlarını projenin kök dizini içerisinde iki farklı terminal sekmesi kullanarak ayrı ayrı çalıştırın.
- Ekte yer alan <strong>SQL Dosyasını</strong> veritabanına import edin.
- Tüm işlemler sorunsuz şekilde gerçekleştirildikten sonra locahost:3000 portu üzerinden projeyi canlı olarak görüntüleyebilirsiniz. 
- Giriş yapabilmek için standar kullanıcı ab204376 sicil numarası, 12345678 şifre olarak belirlenmiştir.
- Admin olarak giriş yapabilmek için ab1 sicil numarası, 12345678 şifre olan belirlenmiştir.

## Proje Mimari Yapısı

- Model - View - Controller (MVC)
- Model (Veri Katmanı)
- View (Görünüm Katmanı)
- Controller (Control Katmanı)

## Projede Kullanılan Teknolojiler

- Laravel 12 (Routing, MiddleWare, Facades, Eloquent ORM, Blade Template Engine, Artisan CLI)
- TailwindCss
- Bootstrap Icons
- Vite
- JavaScript

