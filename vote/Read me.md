TEAM MEMBERS:
NITHYA RADHAKRISHNAN - 20BCE1330
SHIVALI R - 20BCE1361
ABIRAMI UNNA ASHOK - 20BCE1525

Admin login: 
USENAME: Nithya
PASSWORD: admin123

Candidate login: 
USERNAME: Shivali
PASSWORD: cand123

Voter login:
USERNAME: Rishi
PASSWORD: vote123


The First file which is executed is the index.php which is the login page. 
If the user is already registered, he can login with his credentials, or if he is a new user, he can click on the register option. It takes him to register.php, which is the registration page. The user can login as an admin, voter or a candidate and can choose the type of election.
----When the user logs in as an admin, it takes him to admin.php.----
He can manage voters, view candidate space, Check poll results and view positions. 
Under manage voters (managevoters.php), everytime a voter register, the information is updated and stored in manage voters. 
Candidate space takes the user to candspace.php, where the user can accept and reject pending requests of candidates(usage of email here). 
Poll results directs the user to poll.php where he can view past winner of different positions. View positions directs to new.php, where we can view the election information, such as different candidates standing for various positions.
----When the user logs in as a candidate, it takes him to cand.php.----
He can view and edit profile, contact the helpline, Contest in the election, vote and view positions. 
Under manage/edit profile (profile.php), he will be able to view his profile information and be able to change his password. 
Helpline section takes the user to helpline.php, where the user can send a request to contest in the election by filling a form (include file upload). 
Contest directs to contest.php, where once the candidate's request to contest has been accepted, he can fill the form and contest in the elections. 
Vote redirects him to candvote.php, where it displays his voter credentials and can login as a voter. View position (pos.php) shows the available seats for each position and keeps reducing as more candidates are accepted to contest.
----When the user logs in as a voter, it takes him to voter.php.---- 
He can view and edit profile, vote and view positions. 
Under manage/edit profile (profile.php), he will be able to view his profile information and be able to change his password. 
Vote takes the voter to votepos.php, where he can choose the position he wishes to vote for. 
Selecting the position takes him to votecand.php, where he can vote for the candidate. 
View positions directs to new.php, where we can view the election information, such as different candidates standing for various positions.
