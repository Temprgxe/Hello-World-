<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment</title>
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        
        .profile-card {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 30px;
            border-top: 5px solid #3498db;
        }
        .profile-card h1 { color: #2c3e50; margin-bottom: 5px; }
        .profile-card h2 { color: #7f8c8d; font-size: 1.2em; margin-top: 0; }
        .info-box {
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: left;
        }
        
        /* CSS ข้อที่ 2: Loops */
        .loop-section {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .pattern-box {
            font-family: 'Courier New', Courier, monospace; /* ใช้ฟอนต์แบบพิมพ์ดีดเพื่อให้ช่องไฟเท่ากัน */
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            line-height: 1.5;
            font-size: 1.2em;
        }
        .loop-title {
            color: #e74c3c;
            font-weight: bold;
            margin-bottom: 10px;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">

    <?php
        // กำหนดตัวแปรตามโจทย์
        $university = "มหาวิทยาลัยราชภัฏอุดรธานี"; 
        $faculty = "คณะเทคโนโลยีสารสนเทศ";
        $major = "สาขาวิทยาศาสตร์";
        $std_name = "นาย ธนชิต ทวิลา";   
        $intro = "สวัสดีครับ! รหัสนักศึกษา 67040233111";
        
        // ตรวจสอบค่าว่างเพื่อแสดงข้อความ Placeholder (เผื่อให้เห็นในหน้าเว็บ)
        $show_uni = $university == "" ? "(กรุณาระบุมหาวิทยาลัย)" : $university;
        $show_name = $std_name == "" ? "(กรุณาระบุชื่อ-สกุล)" : $std_name;
    ?>

    <div class="profile-card">
        <h1>งานที่ 1 : "Loop"</h1>
        <h2><?php echo $show_uni; ?></h2>
        <hr>
        <div style="text-align: left; margin-left: 20px;">
            <p><strong>ชื่อ-นามสกุล:</strong> <?php echo $show_name; ?></p>
            <p><strong>คณะ:</strong> <?php echo $faculty; ?></p>
            <p><strong>สาขา:</strong> <?php echo $major; ?></p>
        </div>
        <div class="info-box">
            <strong>แนะนำตัว:</strong><br>
            <?php echo $intro; ?>
        </div>
    </div>

    <div class="loop-section">
        <h2 style="text-align:center;">ผลลัพธ์การใช้ Loop (ข้อ 2)</h2>

        <div class="loop-title">1. ใช้ For Loop (รูปสามเหลี่ยม)</div>
        <div class="pattern-box">
            <?php
            $rows = 4;
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            ?>
        </div>

        <div class="loop-title">2. ใช้ While Loop (รูปสี่เหลี่ยมผืนผ้าตัวเลข)</div>
        <div class="pattern-box">
            <?php
            $row = 1;
            while ($row <= 3) {
                $col = 1;
                while ($col <= 4) {
                    echo $row . " ";
                    $col++;
                }
                echo "<br>";
                $row++;
            }
            ?>
        </div>

        <div class="loop-title">3. ใช้ Do While Loop (รูปสามเหลี่ยมตัวเลข)</div>
        <div class="pattern-box">
            <?php
            $i = 1;
            do {
                $j = 1;
                do {
                    echo $i . " ";
                    $j++;
                } while ($j <= $i);
                echo "<br>";
                $i++;
            } while ($i <= 3);
            ?>
        </div>

        <div class="loop-title">4. ใช้ For Loop ผสม (รูปกรอบ)</div>
        <div class="pattern-box">
            <?php
            // ส่วนหัว (ดอกจันล้วน)
            for ($k = 1; $k <= 6; $k++) echo "* "; 
            echo "<br>";

            // ส่วนเนื้อหา (ดอกจัน - เลข - ดอกจัน)
            for ($num = 1; $num <= 3; $num++) {
                echo "* "; // ขอบซ้าย
                for ($inner = 1; $inner <= 4; $inner++) {
                    echo $num . " ";
                }
                echo "* "; // ขอบขวา
                echo "<br>";
            }

            // ส่วนท้าย (ดอกจันล้วน)
            for ($k = 1; $k <= 6; $k++) echo "* "; 
            ?>
        </div>

        <div class="loop-title">5. ใช้ While Loop (รูปสามเหลี่ยมกลับหัว)</div>
        <div class="pattern-box">
            <?php
            $n = 3;
            while ($n >= 1) {
                $m = 1;
                while ($m <= $n) {
                    echo $n . " "; // พิมพ์เลขตามจำนวนแถว
                    $m++;
                }
                echo "<br>";
                $n--;
            }
            ?>
        </div>

    </div>

</div>

</body>
</html>