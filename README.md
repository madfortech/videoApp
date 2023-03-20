migration file old name
class CreateUserprofilesTable extends Migration
class AddFirstnameLastnameToUsers extends Migration
class RenameNameColumnToUsernameToUsersTable extends Migration
class AddDateOfBirthToUsersTable extends Migration
class AddFirstnameLastnameToUserprofilesTable extends Migration
class CreateCommentsTable extends Migration

migration file table name

        class CreateUserprofilesTable extends Migration
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->id();
            $table->binary('userbackground')->nullable();
            $table->binary('profilepic');
            $table->string('fullname',20);
            $table->string('username',9)->unique();
            $table->mediumText('description',255);
            $table->string('siteurl');
            $table->double('mobile')->unique();
            $table->timestamps();
        });

        class AddFirstnameLastnameToUsers extends Migration
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->after('name');
            $table->string('lastname')->after('name');
        });

        class RenameNameColumnToUsernameToUsersTable extends Migration
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'username');
        });

        class AddDateOfBirthToUsersTable extends Migration
        Schema::table('users', function (Blueprint $table) {
            $table->date('Date_of_birth')->after('email')->nullable();
        });

        class AddFirstnameLastnameToUserprofilesTable extends Migration
        Schema::table('userprofiles', function (Blueprint $table) {
            $table->string('lastname')->after('profilepic')->nullable();
            $table->string('firstname')->after('profilepic')->nullable();
            $table->string('gender')->after('profilepic')->nullable();
        });

        class CreateCommentsTable extends Migration

        models old file name
        class Comment extends Model
        class Userprofile extends Model
        class Session extends Model


controller file old name
class DeleteaccountController extends Controller
class DownloaduserdataController extends Controller
class EditProfileController extends Controller
class HelpController extends Controller
class LoginActivityController extends Controller
class NotificationController extends Controller
class PasswordupdateController extends Controller
class PrivacypolicyController extends Controller
class ProfileController extends Controller
class Reportcontroller extends Controller
class SettingController extends Controller
class SitetermsconditionController extends Controller
class TwofactorController extends Controller
class UploadDataController extends Controller
class UseractivityController extends Controller
class UsercommentController extends Controller
class ViewprofileController extends Controller
