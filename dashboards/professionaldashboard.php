<?php
include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
session_start();
include('updateappiontmenttable.php');
include('notificationavailabailty.php');

// Debugging session
// if (!isset($_SESSION['prof_id'])) {
//     echo "Error: Professional ID not set in session.";
//     exit();
// }

$prof_id = $_SESSION['prof_id'];

// Debugging database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("SELECT users.u_name, users.uid, appointment.a_date, appointment.a_time,appointment.message FROM appointment JOIN users ON appointment.uid = users.uid WHERE appointment.prid = ? AND appointment.acceptance IS NULL");
$stmt->bind_param("i", $prof_id);
$stmt->execute();
$result = $stmt->get_result();

$appointments = [];
while ($row = $result->fetch_assoc()) {
    $appointments[] = $row;
}

$stmt->close();

$stmt = $conn->prepare("SELECT users.u_name, users.uid, appointment.a_date, appointment.a_time,appointment.message FROM appointment JOIN users ON appointment.uid = users.uid WHERE appointment.prid = ? AND appointment.acceptance = 'true'");
$stmt->bind_param("i", $prof_id);
$stmt->execute();
$result = $stmt->get_result();

$scheduledappointments = [];
while ($row = $result->fetch_assoc()) {
    $scheduledappointments[] = $row;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Professionalsdashboardstyle.css">
    <link rel="website icon" type="png" href="/GHAR_1/gharimg/ghar.png" />
    <title>Professional Dashboard</title>
</head>
<body>
    <div class="body">
        <header class="shadow">
            <nav>
            <div class="container-items">
            <form method="post" id="signoutform">
            <button class="button-ghost" id="signOutButton" type="button" onclick="submitForm('signout.php')">
              <svg
                      class="h-4 w-4"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      color="#007562"
              >
                      <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                      <polyline points="16 17 21 12 16 7"></polyline>
                      <line x1="21" x2="9" y1="12" y2="12"></line>
              </svg>
            </button>       
          </form>
          <script>
              function submitForm(action) {
                var form = document.getElementById('signoutform');
                form.action = action;
                form.submit();
              }
         </script>  
      </div>
            </nav>
        </header>
 

        <?php if (empty($appointments)) : ?>
            <div class="grid-contents">
            <h2 class="text-bold">Appointment Request</h2>
            </div>
            <div class="grid-4">
            <p>No appointments found.</p>
            </div>   
        <?php else : ?>
            <main class="container-grid">
                <section>
                    <div class="grid-contents">
                        <h2 class="text-bold">Appointment Request</h2>
                    </div>
                    <div class="grid-4">
                        <?php foreach ($appointments as $appointment): ?>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-info">
                                        <h3 class="text-semibold"><?php echo htmlspecialchars($appointment['u_name']); ?></h3>
                                        <p class="text-services"><?php echo htmlspecialchars($appointment['a_date']); ?> <?php echo htmlspecialchars($appointment['a_time']); ?><?php echo htmlspecialchars($appointment['message']); ?></p>
                                    </div>
                                    <div class="gap-2">
                                        <?php
                                            echo'<form method="post">';
                                                echo '<input type="hidden" name="prid" value="' .$prof_id . '">';
                                                echo'<input type="hidden" name="uid" value="' . htmlspecialchars($appointment['uid']) . '">';
                                                echo'<button class="btn-accept" name="operation" type="submit" value="true">Accept</button>';
                                                echo'<button class="btn-decline" name="operation" type="submit" value="false">Decline</button>';
                                            echo'</form>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </main>
        <?php endif; ?>
        
        <section>
        <div class="grid-4">
        <div class="grid-contents">
                        <h2 class="text-bold">Scheduled Appointments</h2>
                    </div>            
                        <?php foreach ($scheduledappointments as $scheduledappointment): ?>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-info">
                                        <h3 class="text-semibold"><?php echo htmlspecialchars($scheduledappointment['u_name']); ?></h3>
                                        <p class="text-services"><?php echo htmlspecialchars($scheduledappointment['a_date']); ?> <?php echo htmlspecialchars($scheduledappointment['a_time']); ?><?php echo htmlspecialchars($scheduledappointment['message']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

        </section>
    </div>
</body>
</html>