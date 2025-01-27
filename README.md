H
# Bloodate

Bloodate is a web-based platform designed to simplify the process of donating and receiving blood. Built with PHP, Bootstrap, CSS, jQuery, and JavaScript, the platform aims to connect donors and recipients efficiently and securely.

## Features

- **Donor Registration**: Allow users to register as blood donors.
- **Blood Request Posting**: Enable recipients to post blood requests with details.
- **Search and Match**: Find matching donors or recipients based on location and blood group.
- **User Authentication**: Secure login and registration system for both donors and recipients.
- **Responsive Design**: Built with Bootstrap to ensure compatibility across all devices.
- **Notifications**: Notify users about matches or updates (optional feature).

## Technologies Used

- **Frontend**: 
  - HTML5, CSS3
  - Bootstrap (for responsive design)
  - jQuery and JavaScript (for dynamic interactions)

- **Backend**:
  - PHP (for server-side logic)

- **Database**:
  - MySQL (for storing user and blood request data)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/bloodate.git
   ```
2. Navigate to the project directory:
   ```bash
   cd bloodate
   ```
3. Set up your server:
   - Use **XAMPP**, **WAMP**, or any PHP server of your choice.
   - Place the project files in the appropriate directory (e.g., `htdocs` for XAMPP).

4. Import the database:
   - Open **phpMyAdmin** or your database management tool.
   - Create a new database (e.g., `bloodate`).
   - Import the provided `.sql` file in the `database` folder.

5. Update the configuration:
   - Edit the database connection settings in the `config.php` file.

6. Start the server and visit:
   ```
   http://localhost/bloodate
   ```

## Usage

1. **Donors**:
   - Register on the platform and provide details such as name, blood group, and location.
   - View and respond to blood requests.

2. **Recipients**:
   - Post a blood request with details such as required blood group and location.
   - Search for and contact nearby donors.


## Contributors

- [Shreyas Saha](http://github.com/SHREYAS17OP)
- [Sahnik Biswas](http://github.com/Sahnik0)
- [Sankalpa Sarkar](https://github.com/sanks011)
- [Aninda Debta](https://github.com/aninda8680)
