# Seleksi Asisten Labpro - Monolith
## **Author**
Antonio Natthan Krishna - 13521162

## **How to Run The Program**
1. Run SingleServiceBE first before running this program on https://github.com/natthankrish/Labpro_Monolith 

2. Clone this repository
```sh
git clone https://github.com/natthankrish/Labpro_Monolith.git
```
2. Change the current directory to `Labpro_Monolith` folder
```sh
cd Labpro_Monolith
```
3. Build and run the container <br>
Your app should be running at port :80 or just simply open localhost
```sh
php artisan serve
```

## **Config**
Server running on [http://127.0.0.1:8000]

## **Endpoints**
| Endpoint             | Method   | Description                                        |
|----------------------|----------|----------------------------------------------------|
| /login               | GET      | Only frontend                                      |
| /register            | GET      | Only frontend                                      |
| /catalog/{id}        | GET      | Show detailed information of barang with given id  |
| /catalog             | GET      | Show all registered barang                         |

Backend for catalog and detail catalog have already defined and connected to https://github.com/natthankrish/Labpro_Monolith

## **Tech Stack**
Laravel, MySQL
