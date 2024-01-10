<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleManagementController extends Controller
{
    function permissions()
    {
        $permissions = Permission::all();
        return view("dashboard.permissions", [
            "permissions" => $permissions,
        ]);
    } // End Method
    function permissionData(Request $request)
    {
        $request->validate(["permissionName" => "required"]);
        Permission::create(['name' => $request->permissionName]);
        return back()->with("permissionAdd", "Permission Added.");
    } // End Method
    function permissionDelete($id)
    {
        Permission::find($id)->delete();
        return back()->with("permissionDeleted", "Delete Successfully.");
    } // End Method

    function roles()
    {
        $permissions = Permission::all();
        $roles = Role::all();
        return view("dashboard.roles", [
            "permissions" => $permissions,
            "roles" => $roles,
        ]);
    } // End Method
    function roleData(Request $request)
    {
        $request->validate(["permissions" => "required", "roleName" => "required"]);

        $role = Role::create(['name' => $request->roleName]);
        $role->givePermissionTo($request->permissions);
        return back()->with("roleAdd", "New Role Added.");
    } // End Method
    function roleDelete($id)
    {
        $role = Role::find($id);
        // $role->syncPermissions([]);
        $role->delete();
        return back()->with("roleDeleted", "Delete Successfully.");
    }

    function users()
    {
        $users = User::all();
        $roles = Role::all();
        return view("dashboard.users", [
            "users" => $users,
            "roles" => $roles,
        ]);
    } // End Method
    function userData(Request $request)
    {
        $request->validate([
            "user" => "required",
            "role" => "required"
        ]);
        $user = User::find($request->user);
        $user->assignRole($request->role);
        return back()->with("assigned", "User Role Assigned.");
    } // End Method
    function removeRole($id)
    {
        $user = User::find($id);
        $user->syncRoles([]);
        return back()->with("removed", "Removed role from user.");


    }
}
